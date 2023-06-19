import pandas as pd 
import plotly.express as px
import streamlit as st


# df = pd.read_csv("tips.csv")

# st.dataframe(df)

spectra = st.sidebar.file_uploader("Upload your file here ",type=["csv","xls"])
st.title(":bar_chart: Rasturant Dashboard")

if spectra is not None:
    df = pd.read_csv(spectra)
st.sidebar.header("Please Filter here:")
time = st.sidebar.multiselect(
    "select the time",
    options=df["time"].unique(),
    default=df["time"].unique()
)

tablesize = st.sidebar.multiselect(
    "select the size of table",
    options=df["tablesize"].unique(),
    default=df["tablesize"].unique()
)

day_1 = st.sidebar.multiselect(
    "select the Day",
    options=df["day_1"].unique(),
    default=df["day_1"].unique()
)

gender = st.sidebar.multiselect(
    "select the gender",
    options=df["gender"].unique(),
    default=df["gender"].unique()
)

smoker = st.sidebar.multiselect(
    "select the size of table",
    options=df["smoker"].unique(),
    default=df["smoker"].unique()
)


age= st.sidebar.multiselect(
    "select the option of age",
     options=df["age"].unique(),
     default=df["age"].unique()

)

# age = df['age'].unique().tolist()

# age = st.slider('age:',
# min_value= min(age),
# max_value=max(age),
# value=(min(age),max(age)))


df_selection = df.query(
    "time == @time & tablesize == @tablesize & day_1 == @day_1 & gender == @gender & smoker == @smoker & age == @age"
)

# st.dataframe(df_selection)

# st.title(":bar_chart: Rasturant Dashboard")
# st.markdown("##")


totalamount = int(df_selection["totalamount"].sum())
# average_rating = round(df_selection["total_bill"].mean(),1)
# star_rating = ":star:" * int(round(average_rating,0))
average_sale_by_transaction = round(df_selection["totalamount"].mean(),2)

# left_column ,midle_column ,right_column =st.columns(3)
# with left_column:
#     st.subheader("Total bill:")
#     st.subheader(f"US $ {total_bill:,}")
# with midle_column:
#     st.subheader("average bill:")
#     st.subheader(f"US $ {total_bill:,}")


left_column ,right_column =st.columns(2)
with left_column:
     st.subheader("Total bill:")
     st.subheader(f" ₹ {totalamount:,}")

with right_column:
     st.subheader("Average bill Trans:")
     st.subheader(f" ₹ {average_sale_by_transaction:,}")



st.markdown("---")

#












sales_by_product_line_time = (
    df_selection.groupby(by=["time"]).sum()[["totalamount"]].sort_values(by="totalamount")
)
new_value = sales_by_product_line_time.to_dict()
fig_product_sales = px.bar(
    new_value,
    x="totalamount",
    y=new_value["totalamount"],
    orientation="h",
    title="<b>Bar chart of lunch and dinner</b>",
    color_discrete_sequence=["#FF7000"] ,
)
fig_product_sales.update_layout(
   plot_bgcolor = "rgba(0,0,0,0)",
   xaxis=(dict(showgrid=False))
)
st.plotly_chart(fig_product_sales)






# sales_by_product_line_day = (
#     df_selection.groupby(by=["day"]).sum()[["total_bill"]].sort_values(by="total_bill")
# )
# new_value_day = sales_by_product_line_day.to_dict()
# fig_product_sales_day = px.bar(
#     new_value_day,
#     x="total_bill",
#     y=new_value_day["total_bill"],
#     # orientation="h",
#     title="<b>Bar chart of lunch and dinner</b>",
#     color_discrete_sequence=["#FF7000"] ,
# )
# # fig_product_sales_day.update_layout(
# #    plot_bgcolor = "rgba(0,0,0,0)",
# #    xaxis=(dict(showgrid=False))
# # )
# st.plotly_chart(fig_product_sales_day)




# sales_by_product_line_gender = (
#     df_selection.groupby(by=["sex"]).sum()[["total_bill"]].sort_values(by="total_bill")
# )
# new_value_sex = sales_by_product_line_day.to_dict()
# fig_product_sales_gender = px.bar(
#     new_value_sex,
#     x="total_bill",
#     y=new_value_sex["total_bill"],
#     # orientation="h",
#     title="<b>Bar chart of lunch and dinner</b>",
#     color_discrete_sequence=["#FF7000"] ,
# )
# # fig_product_sales_gender.update_layout(
# #    plot_bgcolor = "rgba(0,0,0,0)",
# #    xaxis=(dict(showgrid=False))
# # )
# st.plotly_chart(fig_product_sales_gender)















# pie chart 
df_selection.dropna(inplace=True)


pie_chart_day = px.pie(df_selection, 
                title='chart of day total bill',
                values='totalamount',
                names='day_1')
# st.plotly_chart(pie_chart_day)


pie_chart_day_tip = px.pie(df_selection, 
                title='chart of day total tip',
                values='tip',
                names='day_1')
# st.plotly_chart(pie_chart_day_tip)



left_column ,right_column =st.columns(2)
with left_column:
     st.plotly_chart(pie_chart_day)

with right_column:
     st.plotly_chart(pie_chart_day_tip)








pie_chart_sex = px.pie(df_selection, 
                title='chart of gender total bill',
                values='totalamount',
                names='gender')
# st.plotly_chart(pie_chart_sex)

pie_chart_sex_tip = px.pie(df_selection, 
                title='chart of gender total tip',
                values='tip',
                names='gender')
# st.plotly_chart(pie_chart_sex_tip)

left_column ,right_column =st.columns(2)
with left_column:
     st.plotly_chart(pie_chart_sex)

with right_column:
     st.plotly_chart(pie_chart_sex_tip)









pie_chart_smoker = px.pie(df_selection, 
                title='chart of day total SMOKER OR NOT ',
                values='totalamount',
                names='smoker')
# st.plotly_chart(pie_chart_smoker)

pie_chart_smoker_tip = px.pie(df_selection, 
                title='chart of day total tip of SMOKER OR NOT  ',
                values='tip',
                names='smoker')
# st.plotly_chart(pie_chart_smoker_tip)

left_column ,right_column =st.columns(2)
with left_column:
     st.plotly_chart(pie_chart_smoker)

with right_column:
     st.plotly_chart(pie_chart_smoker_tip)












pie_chart_time = px.pie(df_selection, 
                title='chart of  total TIME',
                values='totalamount',
                names='time')
# st.plotly_chart(pie_chart_time)

pie_chart_time_tip = px.pie(df_selection, 
                title='chart of  total tip acc to TIME',
                values='tip',
                names='time')
# st.plotly_chart(pie_chart_time_tip)

left_column ,right_column =st.columns(2)
with left_column:
     st.plotly_chart(pie_chart_time)

with right_column:
     st.plotly_chart(pie_chart_time_tip)













pie_chart_size = px.pie(df_selection, 
                title='chart of  total size',
                values='totalamount',
                names='tablesize')
# st.plotly_chart(pie_chart_size)

pie_chart_size_tip = px.pie(df_selection, 
                title='chart of  total tip of  size',
                values='tip',
                names='tablesize')
# st.plotly_chart(pie_chart_size_tip)

left_column ,right_column =st.columns(2)
with left_column:
     st.plotly_chart(pie_chart_size)

with right_column:
     st.plotly_chart(pie_chart_size_tip)















pie_chart_age = px.pie(df_selection, 
                title='chart of  total size',
                values='totalamount',
                names='age')
# st.plotly_chart(pie_chart_age)

pie_chart_age_tip = px.pie(df_selection, 
                title='chart of  total tip size',
                values='tip',
                names='age')
# st.plotly_chart(pie_chart_age_tip)

left_column ,right_column =st.columns(2)
with left_column:
     st.plotly_chart(pie_chart_age)

with right_column:
     st.plotly_chart(pie_chart_age_tip)








# left_column ,right_column =st.columns(2)
# with left_column:
#      st.plotly_chart(pie_chart_age)

# with right_column:
#      st.plotly_chart(pie_chart_size)





# col1 , col2 = st.columns(2)
# col1.st.plotly_chart(pie_chart_sex)
# col2.st.plotly_chart(pie_chart_day)


# ages = df['age'].unique().tolist()

# age_selection = st.slider('age:',
# min_value= min(ages),
# max_value=max(ages),
# value=(min(ages),max(ages)))




# department_selection = st.multiselect('DepartmentL',
# department,
# default=department)


# mask = (df['Age'].between(*age_selection)) & (df['Department'].isin(department_selection))
# number_of_result = df[mask].shape[0]
# st.markdown(f'*Available Results: {number_of_result}*')




# st.dataframe(df_selection)

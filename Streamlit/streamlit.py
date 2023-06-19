import pandas as pd 
import streamlit as st
import plotly.express as px

spectra = st.sidebar.file_uploader("Upload your
file here ",type=["csv","xlsx"])
st.title(":bar_chart: Rasturant Analysis 
Dashboard")

if spectra is not None:
    df = pd.read_csv(spectra)
st.sidebar.header("Please Filter here:")
time = st.sidebar.multiselect(
    "select the time varaible ",
    options=df["time"].unique(),
    default=df["time"].unique()
)


gender = st.sidebar.multiselect(
    "select the gender varaible",
    options=df["sex"].unique(),
    default=df["sex"].unique()
)

df_selection = df.query(
    "time == @time &  sex == @gender"
)

pie_chart_time = px.pie(df_selection, 
                title='chart of  total TIME ',
                values='total_bill',
                names='time')

st.plotly_chart(pie_chart_time)


pie_chart_sex = px.pie(df_selection, 
                title='chart of gendertotal bill',
                values='total_bill',
                names='sex')

st.plotly_chart(pie_chart_sex)
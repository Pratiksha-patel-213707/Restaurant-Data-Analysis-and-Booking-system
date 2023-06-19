import pandas as pd
import streamlit as st
import plotly.express as px

spectra = st.sidebar.file_uploader("upload your fike here " , type=["csv","xlsx"])
st.title("Bar chart and Pi Chart Dashboard")

if spectra is not None:
    df = pd.read_csv(spectra)
st.sidebar.header("PLEASE SELECT VARIABLE")

time = st.sidebar.multiselect(
    "selecct the time varaible DInner and lunch",
    options=df["time"].unique(),
    default=df["time"].unique()
)

gender = st.sidebar.multiselect(
    "selecct the gender varaible male female",
    options=df["sex"].unique(),
    default=df["sex"].unique()
)

day = st.sidebar.multiselect(
    "selecct the Day varaible",
    options=df["day"].unique(),
    default=df["day"].unique()
)

df_selection = df.query(
    "time == @time & sex == @gender & day == @day"
)

pie_chart_time = px.pie(df_selection,
title= ' chart of total TIME ',
values='total_bill',
names='time')

st.plotly_chart(pie_chart_time)


pie_chart_gender = px.pie(df_selection,
title= ' chart of total Gender ',
values='total_bill',
names='sex')

st.plotly_chart(pie_chart_gender)

pie_chart_day = px.pie(df_selection,
title= ' chart of total Gender ',
values='total_bill',
names='day')

st.plotly_chart(pie_chart_day)
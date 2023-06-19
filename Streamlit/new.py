# import plotly as px
import plotly.express as px
import streamlit as st
n={"total_bill":{"suraj":(1,2,34,5,5,6,6,6),"faiyaz":(1,2,3,4,5,6,1,2)}}

new = px.bar(
    n,
    x="total_bill",
    y=["suraj"]
)
st.plotly_chart(new)
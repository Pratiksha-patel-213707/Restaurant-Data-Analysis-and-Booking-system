import streamlit as st
from matplotlib import pyplot as plt 
import numpy as np
import pandas as pd




# CODE FOR SIDE BAR CREATING 


spectra = st.sidebar.file_uploader("Upload your file here ",type=["csv","xlsx"])
st.markdown("<h1 Style='text-align: center; font-size: 1.6rem; color: Brown;'>Your Uploaded Data</h1>",unsafe_allow_html=True)
if spectra is not None:
    spectra_df = pd.read_csv(spectra)
    st.write(spectra_df)
    st.bar_chart(spectra_df["day"])
    
    input_col , pie_col = st.columns(2)
    spectra_df = spectra_df.reset_index()
    spectra_df.columns = ['day','cout']
    print(spectra_df)

   # fig  = px.pie(spectra_df,values = 'count' , names = 'day')
   # pie_col.write(fig)

  
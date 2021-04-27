using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WebServiceDZ
{
    public partial class WebFormaKlijenta : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void BtnEUR_Click(object sender, EventArgs e)
        {
            KlijentAplikacija.WebService1SoapClient klijent = 
                new KlijentAplikacija.WebService1SoapClient("WebService1Soap");
            float broj = float.Parse(InputEUR.Text);
            float rezultat = klijent.konverzijaEURtoBAM(broj);
            LblRezultat.Text = "rezultat je: " + rezultat + "BAM";

        }

        protected void BtnBAM_Click(object sender, EventArgs e)
        {
            KlijentAplikacija.WebService1SoapClient klijent =
               new KlijentAplikacija.WebService1SoapClient("WebService1Soap");
            float broj = float.Parse(InputBAM.Text);
            float rezultat = klijent.konverzijaBAMtoEUR(broj);
            LblRezultat.Text = "rezultat je: " + rezultat + "EUR";

        }
    }
}
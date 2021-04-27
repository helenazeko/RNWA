using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;

namespace WebServiceDZ
{
    /// <summary>
    /// Summary description for WebService1
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService1 : System.Web.Services.WebService
    {
        [System.Web.Services.WebMethod]
        public float konverzijaEURtoBAM(float e)
        {
            return (float)(e * 1.96);
        }


        [System.Web.Services.WebMethod]
        public float konverzijaBAMtoEUR(float b)
        {
            return (float)(b * 0.51);
        }

       
    }
}

using System.Web.Services;
using MySql.Data.MySqlClient;
using System.Data;

namespace WebServiceDZ
{
    /// <summary>
    /// Summary description for WebService2
    /// </summary>
    [WebService(Namespace = "http://tempuri.org/")]
    [WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
    [System.ComponentModel.ToolboxItem(false)]
    // To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
    // [System.Web.Script.Services.ScriptService]
    public class WebService2 : System.Web.Services.WebService
    {

        

        [System.Web.Services.WebMethod]
        public DataTable getEmployeerByID(string Number)
        {
            string connString = "SERVER=localhost" + ";" +
                "DATABASE=employees;" +
                "UID=root;" +
                "PASSWORD=;";

            MySqlConnection cnMySQL = new MySqlConnection(connString);

            MySqlCommand cmdMySQL = cnMySQL.CreateCommand();

            MySqlDataReader reader;

            string querry = "select * from employees where emp_no =" + Number;

            cmdMySQL.CommandText = querry;
            cnMySQL.Open();

            reader = cmdMySQL.ExecuteReader();

            DataTable dt = new DataTable();
            dt.Load(reader);


            cnMySQL.Close();

            return dt;
        }
    }
}

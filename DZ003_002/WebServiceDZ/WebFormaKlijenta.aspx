<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WebFormaKlijenta.aspx.cs" Inherits="WebServiceDZ.WebFormaKlijenta" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div style="height: 19px"> Poziv web servisa
        </div>
        <p>
            EUR u BAM:<asp:TextBox ID="InputEUR" runat="server" style="margin-left: 17px" Width="125px"></asp:TextBox>
            <asp:Button ID="BtnEUR" runat="server" Text="Pretvori" Width="62px" OnClick="BtnEUR_Click" />
        </p>
        <p>
            BAM u EUR :<asp:TextBox ID="InputBAM" runat="server" style="margin-left: 17px" Width="125px"></asp:TextBox>
            <asp:Button ID="BtnBAM" runat="server" Text="Pretvori" Width="62px" OnClick="BtnBAM_Click" />
        </p>
        <p>
            <asp:Label ID="LblRezultat" runat="server" Text=""></asp:Label>
        </p>

    </form>
</body>
</html>

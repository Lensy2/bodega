<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="plasmar.jpg" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="plasmar.jpg" />
    <title>Ingresar Rollos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <link href="assets/css/dashboard.css" rel="stylesheet" />
    <script src="assets/js/dashboard.js"></script>
    <link href="assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="assets/plugins/charts-c3/plugin.js"></script>
    <link href="assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="assets/plugins/maps-google/plugin.js"></script>
    <script src="assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown d-none d-md-flex"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action=" " method="post" class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ingresar Rollos</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                      <table>
                                            <BR>
                                              <td>
                                                 <form action="verificaregistro.php" method=POST>
                                                        Fecha <input type="date" name=fecha required />*<br><br>
                                                        Ubicación
                                                     <select  name=ubicacion required />
                                                        <option value="12A12"/>12A12
                                                        <option value="12B12"/>12B12
                                                        <option value="12C12"/>12C12
                                                        <option value="12D12"/>12D12
                                                        <option value="12A11"/>12A11
                                                        <option value="12B11"/>12B11
                                                        <option value="12C11"/>12C11
                                                        <option value="12D11"/>12D11
                                                        <option value="12A10"/>12A10
                                                        <option value="12B10"/>12B10
                                                        <option value="12C10"/>12C10
                                                        <option value="12D10"/>12D10
                                                        <option value="12A09"/>12A09
                                                        <option value="12B09"/>12B09
                                                        <option value="12C09"/>12C09
                                                        <option value="12D09"/>12D09
                                                        <option value="12A08"/>12A08
                                                        <option value="12B08"/>12B08
                                                        <option value="12C08"/>12C08
                                                        <option value="12D08"/>12D08
                                                        <option value="12A07"/>12A07
                                                        <option value="12B07"/>12B07
                                                        <option value="12C07"/>12C07
                                                        <option value="12D07"/>12D07
                                                        <option value="12A06"/>12A06
                                                        <option value="12B06"/>12B06
                                                        <option value="12C06"/>12C06
                                                        <option value="12D06"/>12D06
                                                        <option value="13A12"/>13A12
                                                        <option value="13B12"/>13B12
                                                        <option value="13C12"/>13C12
                                                        <option value="13D12"/>13D12
                                                        <option value="13A11"/>13A11
                                                        <option value="13B11"/>13B11
                                                        <option value="13C11"/>13C11
                                                        <option value="13D11"/>13D11
                                                        <option value="13A10"/>13A10
                                                        <option value="13B10"/>13B10
                                                        <option value="13C10"/>13C10
                                                        <option value="13D10"/>13D10
                                                        <option value="13A09"/>13A09
                                                        <option value="13B09"/>13B09
                                                        <option value="13C09"/>13C09
                                                        <option value="13D09"/>13D09
                                                        <option value="13A08"/>13A08
                                                        <option value="13B08"/>13B08
                                                        <option value="13C08"/>13C08
                                                        <option value="13D08"/>13D08
                                                        <option value="13A07"/>13A07
                                                        <option value="13B07"/>13B07
                                                        <option value="13C07"/>13C07
                                                        <option value="13D07"/>13D07
                                                        <option value="13A06"/>13A06
                                                        <option value="13B06"/>13B06
                                                        <option value="13C06"/>13C06
                                                        <option value="13D06"/>13D06
                                                        <option value="REFIL"/>REFIL
                                                        <option value="01A01"/>01A01
                                                        <option value="01B01"/>01B01
                                                        <option value="01C01"/>01C01
                                                        <option value="01D01"/>01D01
                                                        <option value="01A02"/>01A02
                                                        <option value="01B02"/>01B02
                                                        <option value="01C02"/>01C02
                                                        <option value="01D02"/>01D02
                                                        <option value="01A03"/>01A03
                                                        <option value="01B03"/>01B03
                                                        <option value="01C03"/>01C03
                                                        <option value="01D03"/>01D03
                                                        <option value="PISOBODEGA"/>PISOBODEGA
                                                     </select>*<br><br>
                                                            <input type=submit class="btn btn-primary" value='Ingresar' /><br><br>
                                                 </form>
                                              </td>
                                        </table>
                                     </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
     </div>
  </body>
</html>


<body>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" onclick="show('Consolidado')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home align-text-bottom" aria-hidden="true">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Consolidado
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="show('Terminacion')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file align-text-bottom" aria-hidden="true">
                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                  <polyline points="13 2 13 9 20 9"></polyline>
                </svg>
                Terminación
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="show('Lluvia')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart align-text-bottom" aria-hidden="true">
                  <circle cx="9" cy="21" r="1"></circle>
                  <circle cx="20" cy="21" r="1"></circle>
                  <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
                Lluvia
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users align-text-bottom" aria-hidden="true">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                ...
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2 align-text-bottom" aria-hidden="true">
                  <line x1="18" y1="20" x2="18" y2="10"></line>
                  <line x1="12" y1="20" x2="12" y2="4"></line>
                  <line x1="6" y1="20" x2="6" y2="14"></line>
                </svg>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers align-text-bottom" aria-hidden="true">
                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                  <polyline points="2 17 12 22 22 17"></polyline>
                  <polyline points="2 12 12 17 22 12"></polyline>
                </svg>
                Integrations
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom" aria-hidden="true">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="8" x2="12" y2="16"></line>
                <line x1="8" y1="12" x2="16" y2="12"></line>
              </svg>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Current month
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text align-text-bottom" aria-hidden="true">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
                Year-end sale
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="chartjs-size-monitor">
          <div class="chartjs-size-monitor-expand">
            <div class=""></div>
          </div>
          <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar align-text-bottom" aria-hidden="true">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              This week
            </button>
          </div>
        </div>

        <!-- <div id="Consolidado" class="container-fluid">
          <iframe title="Informe Consolidado de Producción - CNS_MANANTIALES" width="1060" height="700" src="https://app.powerbi.com/view?r=eyJrIjoiMGE4MTY2NTctYzFmNC00ZWUxLWExNDQtNDEzNjRjZDMwMDgwIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>

        </div>

        <div id="Lluvia" class="container-fluid">
          <iframe title="Informe Precipitacion  y Sigatoka - Lluvia" width="1060" height="750" src="https://app.powerbi.com/view?r=eyJrIjoiNDEyOTYyN2ItYjU3Yi00ZjViLTg4ODgtMzQ5NWRiMzE0ZTNiIiwidCI6ImI5NDc0NWY2LTExYjgtNDlkYi04NTdmLTI0MDFhY2U3ZDViOCIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>

        </div> -->


        <div id="Terminacion" class="row g-5">
          <!-- <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Your cart</span>
              <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$12</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Second product</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$8</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0">Third item</h6>
                  <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Promo code</h6>
                  <small>EXAMPLECODE</small>
                </div>
                <span class="text-success">−$5</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$20</strong>
              </li>
            </ul>

            <form class="card p-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Promo code">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </form>
          </div> -->
          <div class="col-md-7 col-lg-8">
            <!-- Select de fincas -->
            <label for="fincas">Fincas</label>
            <select class="form-control mb-3" id="fincas">
              <option value="MN">Manantiales</option>
              <option value="MD">Madelandia</option>
              <option value="SH">Santa Helena</option>
              <option value="CO">Corrales</option>
              <option value="GA">Galilea</option>
              <option value="CU">Curazao</option>
            </select>
            <form class="form-inline" novalidate="">
              <div class="row g-3">
                <div class="col-sm-2 form-group">
                  <label for="area" class="form-label">Area Recorrida</label>
                  <input type="text" class="form-control" id="area" placeholder="" value="" required="">

                </div>
                <div class="col-sm-2 form-group">
                  <label for="cajas" class="form-label">Cajas Estimadas</label>
                  <input type="text" class="form-control" id="cajas" placeholder="" value="" required="">

                </div>

                <div class="col-sm-2 form-group">
                  <label for="empaca" class="form-label">Persona Empacadora</label>
                  <input type="text" class="form-control" id="empaca" placeholder="" value="" required="">

                </div>
                <div class="col-sm-2 form-group">
                  <label for="campo" class="form-label">Persona Campo</label>
                  <input type="text" class="form-control" id="campo" placeholder="" value="" required="">

                </div>
                <div class="col-sm-2 form-group">
                  <label for="mano" class="form-label">Calibre 2da Mano</label>
                  <input type="text" class="form-control" id="mano" placeholder="" value="" required="">

                </div>
                <div class="">
                  <div class="row">

                    <div class="col-sm-4 form-label">
                      <a for="racimosCortados" class="form-label" onclick="emergentes('RacimosCortados')" ondblclick="sinemergentes('RacimosCortados')">Racimos Cortados</a>


                    </div>
                    <div id="RacimosCortados" class="col-sm-2 form-group venEmergente">

                      <input type="text" class="form-control" id="sm5" placeholder="Corte 5 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm6" placeholder="Corte 6 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm7" placeholder="Corte 7 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm8" placeholder="Corte 8 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm9" placeholder="Corte 9 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm10" placeholder="Corte 10 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm11" placeholder="Corte 11 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm12" placeholder="Corte 12 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm13" placeholder="Corte 13 semanas" value="" required="">
                      <input type="text" class="form-control" id="rechazados" placeholder="Racimos Rechazados" value="" required="">

                    </div>
                  </div>

                </div>
                <div class="">
                  <div class="row">

                    <div class="col-sm-4 form-label">
                      <a for="RacimosRepicados" class="form-label" onclick="emergentes('RacimosRepicados')" ondblclick="sinemergentes('RacimosRepicados')">Racimos Repicados</a>


                    </div>
                    <div id="RacimosRepicados" class="col-sm-2 form-group venEmergente">

                      <input type="text" class="form-control" id="sm5" placeholder="Corte 5 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm6" placeholder="Corte 6 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm7" placeholder="Corte 7 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm8" placeholder="Corte 8 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm9" placeholder="Corte 9 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm10" placeholder="Corte 10 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm11" placeholder="Corte 11 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm12" placeholder="Corte 12 semanas" value="" required="">
                      <input type="text" class="form-control" id="sm13" placeholder="Corte 13 semanas" value="" required="">


                    </div>
                  </div>

                </div>
                <div class="">


                  <div class="col-sm-6 form-group">

                    <label for="fincas">Defecto 1</label>
                    <div class="input-group">

                      <select class="form-control mb-3" id="fincas">
                        <option value="MN">Cicatriz Manejo</option>
                        <option value="MD">Desgarre</option>
                        <option value="SH">Malformado</option>
                        <option value="CO">Latex Viejo</option>
                        <option value="GA">Bajo Grado</option>
                        <option value="CU">Sobre Grado</option>
                      </select>
                      <input class="form-control mb-3" type="text">
                      <span class=""> % </span>
                    </div>
                  </div>
                  <div class="col-sm-6 form-group">

                    <label for="fincas">Defecto 2</label>
                    <div class="input-group">

                      <select class="form-control mb-3" id="fincas">
                        <option value="MN">Cicatriz Manejo</option>
                        <option value="MD">Desgarre</option>
                        <option value="SH">Malformado</option>
                        <option value="CO">Latex Viejo</option>
                        <option value="GA">Bajo Grado</option>
                        <option value="GA">Bacteriosis</option>
                        <option value="CU">Sobre Grado</option>
                      </select>
                      <input class="form-control mb-3" type="text">
                      <span class=""> % </span>
                    </div>
                  </div>
                  <div class="col-sm-6 form-group">

                    <label for="fincas">Defecto 3</label>
                    <div class="input-group">

                      <select class="form-control mb-3" id="fincas">
                        <option value="MN">Cicatriz Manejo</option>
                        <option value="MD">Desgarre</option>
                        <option value="SH">Malformado</option>
                        <option value="CO">Latex Viejo</option>
                        <option value="GA">Bajo Grado</option>
                        <option value="CU">Sobre Grado</option>
                      </select>
                      <input class="form-control mb-3" type="text">
                      <span class=""> % </span>
                    </div>
                  </div>
                </div>





                <div class="">
                  <div class="row">

                    <div class="col-sm-4 form-label">
                      <a for="FrutaExportada" class="form-label" onclick="emergentes('FrutaExportada')" ondblclick="sinemergentes('FrutaExportada')">Fruta Exportada</a>


                    </div>
                    <div id="FrutaExportada" class="col-sm-4 form-group venEmergente">

                      <!-- tabla de 4 columnas -->
                      <table id="tabla" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Codigo</th>
                            <th>Fruta</th>
                            <th>Cantidad</th>
                            <th>Rechazo</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" class="form-control" id="cod" placeholder="" value="" required></td>
                            <td><input type="text" class="form-control" id="sm1" placeholder="" value="" disabled></td>
                            <td><input type="text" class="form-control" id="sm2" placeholder="" value="" required=""></td>
                            <td><input type="text" class="form-control" id="sm3" placeholder="" value="" required=""></td>
                          </tr>
                          
                      </table>

                      <input type="button" value="+" onclick="insertaFila()">


                    </div>
                  </div>

                </div>

                <div class="col-sm-2 form-group">
                  <label for="area" class="form-label">Cajas Nacional</label>
                  <input type="text" class="form-control" id="area" placeholder="" value="" required="">

                </div>
                <div class="col-sm-2 form-group">
                  <label for="cajas" class="form-label">Bolsas Nacional</label>
                  <input type="text" class="form-control" id="cajas" placeholder="" value="" required="">

                </div>

                <div class="col-sm-2 form-group">
                  <label for="empaca" class="form-label">Kilos Nacional</label>
                  <input type="text" class="form-control" id="empaca" placeholder="" value="" required="">

                </div>
                <div class="col-sm-2 form-group">
                  <label for="campo" class="form-label">Kilos a Personal</label>
                  <input type="text" class="form-control" id="campo" placeholder="" value="" required="">

                </div>
                <div class="col-sm-2 form-group">
                  <label for="mano" class="form-label">Kilos Fruta de Piso</label>
                  <input type="text" class="form-control" id="mano" placeholder="" value="" required="">

                </div>





                <!-- <div class="col-12">
                  <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>

                <div class="col-12">
                  <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <select class="form-select" id="country" required="">
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-md-4">
                  <label for="state" class="form-label">State</label>
                  <select class="form-select" id="state" required="">
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required="">
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Payment</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                  <label class="form-check-label" for="credit">Credit card</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="debit">Debit card</label>
                </div>
                <div class="form-check">
                  <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                  <label class="form-check-label" for="paypal">PayPal</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Name on card</label>
                  <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Credit card number</label>
                  <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Expiration</label>
                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div> -->

              <hr class="my-4">

              <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
          </div>
        </div>






        <!--<div id="Terminacion" class="container-fluid">

           
          <div class="form-group">
            <label for="fincas">Fincas</label>
            <select class="form-control" id="fincas">
              <option>Manantiales</option>
              <option>Madelandia</option>
              <option>Santa_Helena</option>
              <option>Corrales</option>
              <option>Galilea</option>
              <option>Curazao</option>
            </select>
            </div>

            


            <div class="form-control">
              <p>Area Recorrida: <input type="text" name="nombre"></p>
            </div>
            <div class="form-control">
              <p>Cajas Estimadas: <input type="text" name="Cjsestimadas"></p>
            </div>
            <div class="form-control">
              <p>Persona Empacadora: <input type="text" name="P_Empacadora"></p>
            </div>
            <div class="form-control">
              <p>Persona Campo: <input type="text" name="P_Campo"></p>
            </div>

          </div>-->
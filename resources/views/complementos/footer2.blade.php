<!--  footer -->
      <footer class="mt-5">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="fid_box">
                        <ul class="location_icon">
                           <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br>+01 1234567890
                           </li>
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="dolor">
                        <p>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Modal Escenarios -->
       <div class="modal fade" id="modalCrearEscenario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                     <h5 class="modal-title" id="exampleModalLabel">Registrar Nuevo Escenario Deportivo</h5>
                     <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ route('escenarios.store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="modal-body">
                        <div class="row">
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Nombre del Escenario</label>
                                 <input type="text" name="nombre_escenario" class="form-control" required>
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label class="form-label">Descripción</label>
                                 <textarea name="descripcion" class="form-control" rows="2"></textarea>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Municipio</label>
                                 <select name="municipio" class="form-select" required>
                                    <option value="Pereira">Pereira</option>
                                    <option value="Dosquebradas">Dosquebradas</option>
                                    <option value="La Virginia">La Virginia</option>
                                 </select>
                              </div>

                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Dirección</label>
                                 <input type="text" name="direccion" class="form-control" required>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Deporte</label>
                                 <select name="deporte" class="form-select">
                                    <option value="Futbol">Futbol</option>
                                    <option value="Baloncesto">Baloncesto</option>
                                 </select>
                              </div>

                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Latitud</label>
                                 <input type="number" step="any" name="latitud" class="form-control" required>
                              </div>
                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Longitud</label>
                                 <input type="number" step="any" name="longitud" class="form-control" required>
                              </div>

                              <div class="col-md-4 mb-3">
                                 <label class="form-label">Capacidad</label>
                                 <input type="number" name="capacidad" class="form-control" required>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label class="form-label">Iluminación</label>
                                 <select name="iluminacion" class="form-select">
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                 </select>
                              </div>
                              <div class="col-md-4 mb-3">
                                 <label class="form-label">Tipo de Suelo</label>
                                 <input type="text" name="suelo" class="form-control" placeholder="Ej: Madera, Cemento">
                              </div>

                              <div class="col-md-6 mb-3">
                                 <label class="form-label">Estado</label>
                                 <select name="estado" class="form-select">
                                    <option value="Excelente">Excelente</option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Mantenimiento">En Mantenimiento</option>
                                 </select>
                              </div>

                              <div class="col-md-12 mb-3">
                                 <label class="form-label">Horarios de Atención</label>
                                 <textarea name="horarios" class="form-control" rows="2" placeholder="Ej: Lunes a Viernes 8am - 10pm" required></textarea>
                              </div>
                              <div class="col-md-12 mb-3">
                                 <label class="form-label">Subir Foto del Escenario</label>
                                 <input type="file" name="imagen" class="form-control" accept="image/*">
                              </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Guardar Escenario</button>
                     </div>
                  </form>
            </div>
         </div>
      </div>

<!-- Javascript files-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
    }
         
    function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
    }
</script>

</body>
</html>
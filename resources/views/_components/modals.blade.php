<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Soldadura de mantenimiento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row"> <!-- Agregada la clase row -->
                <div class="col-md-5"> <!-- Columna para la imagen -->
                    <img src="{{asset('img/soldadura-detalle.jpg')}}" class="img-fluid mb-3" alt="Servicio de Soldadura">
                </div>
                <div class="col-md-7"> <!-- Columna para el texto -->
                    <p>El servicio de soldadura de mantenimiento está diseñado para atender las necesidades críticas de infraestructura y equipos. Utilizamos las técnicas más avanzadas para asegurar uniones fuertes y duraderas:</p>
                    <ul>
                        <li><strong>SMAW (Shielded Metal Arc Welding)</strong>: Este método comúnmente conocido como soldadura de arco eléctrico con electrodo revestido. Es ideal para aceros al carbono, aceros de baja aleación y aceros inoxidables.</li>
                        <li><strong>GMAW (Gas Metal Arc Welding)</strong>: También conocida como soldadura MIG, esta técnica utiliza un alambre continuo como electrodo y un gas para proteger la soldadura de contaminantes en el aire.</li>
                        <li><strong>GTAW (Gas Tungsten Arc Welding)</strong>: Conocida también como soldadura TIG, es perfecta para soldar aluminio, acero inoxidable, níquel y algunas aleaciones de cobre.</li>
                        <li><strong>FCAW (Flux-Cored Arc Welding)</strong>: Similar a la soldadura MIG, pero utiliza un alambre especial que puede operar sin el uso de un gas protector.</li>
                    </ul>
                    <p>Nuestros expertos están certificados y cuentan con años de experiencia en el campo, garantizando trabajos de la más alta calidad.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <a href="https://wa.me/51969911844?text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20el%20servicio%20de%20Soladura%20de%20de%20Mantenimiento%20{{ urlencode(url('/servicios')) }}" target="_blank" class="btn btn-outline-success">Agenda con nosotros</a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="jomarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl  modal-dialog-scrollable">
        <div class="modal-content ">
            <div class="modal-header">
                <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Servicio de Confiabilidad</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-5"> <!-- Columna para la imagen -->
                    <img src="{{asset('img/detalle-services.jpg')}}" class="img-fluid mb-3" alt="Servicio de Confiabilidad">
                </div>
                <div class="col-md-7"> <!-- Columna para el texto -->
                    <p>Nuestro Servicio de Confiabilidad garantiza el máximo rendimiento y vida útil de tus equipos e instalaciones. Ofrecemos:</p>
                    <ul>
                        <li><strong>Análisis Vibracional</strong>: Detectamos problemas en tus maquinarias antes de que se conviertan en fallas más serias.</li>
                        <li><strong>Alineamiento Láser</strong>: Precisión en la alineación de maquinaria rotativa, reduciendo desgaste y ahorrando energía.</li>
                        <li><strong>Análisis de Falla de Rodamientos</strong>: Prevención y diagnóstico temprano de problemas en rodamientos.</li>
                        <li><strong>Mantenimiento Especializado a Equipos</strong>: Servicios personalizados según las necesidades y especificaciones de tus equipos.</li>
                    </ul>
                    <p>La confiabilidad no solo se trata de reparar, sino de prevenir y optimizar para asegurar el rendimiento óptimo.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <a href="https://wa.me/51969911844?text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20el%20servicio%20de%20Servicios%20de%20Integrales%20{{ urlencode(url('/servicios')) }}" target="_blank" class="btn btn-outline-success">Agenda con nosotros</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="cruzModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">Mecanizado de Piezas [Equipos CNC]</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="col-md-5"> <!-- Columna para la imagen -->
                    <img src="{{asset('img/cnc-detalle.png')}}" class="img-fluid mb-3" alt="Mecanizado de Piezas">
                </div>
                <div class="col-md-7"> <!-- Columna para el texto -->
                    <p>Nuestro servicio de mecanizado con Equipos CNC (Control Numérico por Computadora) ofrece precisión y repetibilidad en la producción de piezas:</p>
                    <ul>
                        <li><strong>Torneado CNC</strong>: Ideal para producir piezas de revolución con precisión milimétrica.</li>
                        <li><strong>Fresado CNC</strong>: Para trabajos más complejos, donde se requiere cortar el material en múltiples ejes.</li>
                        <li><strong>Taladrado y Roscado CNC</strong>: Producción precisa de agujeros y roscas.</li>
                    </ul>
                    <p>Con herramientas avanzadas y programación especializada, garantizamos piezas mecanizadas con alta precisión, ideales para industrias que requieren tolerancias estrechas y alta calidad.</p>
                </div>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
               <a href="https://wa.me/51969911844?text=Hola,%20me%20gustaría%20obtener%20más%20información%20sobre%20el%20servicio%20de%20Mecanizado%20de%20Piezas%20[CNC]%20{{ urlencode(url('/servicios')) }}" target="_blank" class="btn btn-outline-success">Agenda con nosotros</a>
            </div>
        </div>
    </div>
</div>

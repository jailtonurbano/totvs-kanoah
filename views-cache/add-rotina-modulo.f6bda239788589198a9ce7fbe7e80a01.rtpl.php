<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper">
  <section class="content-header">
    <h1>
      Módulo <?php echo htmlspecialchars( $modulo, ENT_COMPAT, 'UTF-8', FALSE ); ?> > Adicionar rotina
    </h1>
  </section>

  <section class="content">
    <div class="row">
      
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Rotinas</h3>
          </div>
          <div class="box-body">

            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>#</th>
                  <th>Rotina</th>
                </tr>

                <tr>
                  <td>{}</td>
                  <td>{}</td>
                </tr>
                
              </table>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Parâmetros</h3>
          </div>
          <div class="box-body">

           

          </div>
        </div>
      </div>

    </div>
  </section>
</div>
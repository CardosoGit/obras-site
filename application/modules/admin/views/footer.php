      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
      </div>
      <strong>Copyright &copy; 2014-2015 <a href="http://WWW.oma.inf.br">OMA Informática</a>.</strong> Todos os direitos reservados.
  </footer>


</div><!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- jQuery 2.1.4 -->
<script src="{base_url}assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{base_url}assets/js/admin/vendor/bootstrap.js"></script>
<!-- Select2 -->
<script src="{base_url}assets/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="{base_url}assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="{base_url}assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="{base_url}assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{base_url}assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="{base_url}assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="{base_url}assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{base_url}assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="{base_url}assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="{base_url}assets/plugins/fastclick/fastclick.min.js"></script>
<!-- DataTables -->
<script src="{base_url}assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{base_url}assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="{base_url}assets/js/admin/app.min.js"></script>
<script src="{base_url}assets/js/admin/script.js"></script>


<!-- Page script -->


  <script>
      $(function () {
        $("#obras").DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>


</body>
</html>

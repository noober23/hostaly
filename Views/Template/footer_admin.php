        <script>
            const base_url = "<?= base_url(); ?>";
        </script>
        <!--Essential Javascript libraries-->
        <script src="<?= media();?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?= media();?>/js/popper.min.js"></script>
        <script src="<?= media();?>/js/bootstrap.min.js"></script>
        <script src="<?= media();?>/js/main.js"></script>

         <script src="<?= media();?>/js/plugins/pace.min.js"></script>

        <!-- Data table plugin-->
        <script type="text/javascript" src="<?= media();?>/js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?= media();?>/js/plugins/dataTables.bootstrap.min.js"></script>
      
         <!-- Libreria funciones de paginas-->
         <script src="<?= media();?>/js/functions_admin.js"></script>
         <script src="<?= media();?>/js/functionsRoles.js"></script>

         <script src="<?= media();?>/js/<?= $data['page_function_js'];?>"></script>
    </body>
</html>


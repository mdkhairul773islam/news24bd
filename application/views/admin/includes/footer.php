            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap Core JavaScript -->
        <script type="text/javaScript" src="<?php echo site_url('private/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javaScript" src="<?php echo site_url('private/js/ngScript.js'); ?>"></script>
        <!-- All plugins -->
        <script type="text/javaScript" src="<?php echo site_url('private/plugins/bootstrap-fileinput-master/js/fileinput.min.js') ;?>"></script>
        
	<!-- Nice Scroll -->
	<script src="<?php echo site_url('private/js/jquery.nicescroll.min.js'); ?>"></script>

    <script src="<?php echo site_url('public/news/js/tag-it.min.js')?>"></script>
	
        <!-- custom Core JavaScript -->
        <script src="<?php echo site_url('private/js/script.js'); ?>"></script>
 

        <!-- Menu Toggle Script -->
        <script type="text/javaScript">
            $("#menu-toggle").click(function(e) {
                e.preventDefault();

                $("#wrapper").toggleClass("toggled");
                $(this).toggleClass("icon-change");
            });







            $(function () {
                $('#datetimepicker1').datetimepicker({
                    format: 'YYYY-MM-DD'
                });
                
                $('#datetimepicker2').datetimepicker({
                    format: 'YYYY-MM-DD'
                });


                // linking between two date
                $('#datetimepickerFrom').datetimepicker();
                $('#datetimepickerTo').datetimepicker({
                    useCurrent: false
                });
                $("#datetimepickerFrom").on("dp.change", function (e) {
                    $('#datetimepickerTo').data("DateTimePicker").minDate(e.date);
                });
                $("#datetimepickerTo").on("dp.change", function (e) {
                    $('#datetimepickerFrom').data("DateTimePicker").maxDate(e.date);
                });
            });

            // file upload with plugin options
            $("input#input").fileinput({
                browseLabel: "Pick Image",
                previewFileType: "text",
                allowedFileExtensions: ["jpg", "jpeg", "png"],
            });

            
        $(function(){
            var sampleTags = ['Bangladesh', 'Pakistan', 'India', 'America', 'England', 'Australia'];
      
            //-------------------------------
                  // Input field
                  //-------------------------------
                  $('#singleFieldTags').tagit({
                      availableTags: sampleTags,
                      // This will make Tag-it submit a single form value, as a comma-delimited field.
                      singleField: true,
                      singleFieldNode: $('#mySingleField'),
              allowSpaces: true
                  });
            
            //-------------------------------
                  // Read only
                  //-------------------------------
                  $('#readOnlyTags').tagit({
                      readOnly: true
                  });
          });
            
        </script>

        <script>
        $(document).on('ready', function() {
            $("#input-4").fileinput({showCaption: false});
        });
        </script>

    </body>
</html>
<!--   <script type="text/javascript">
  $('#input-description1').summernote({
            height: 300
        });
        $('#input-content').summernote({
            height: 300
        });
  //</script> -->
    <script type="text/javascript"><!--
        $('input[name=\'path\']').autocomplete({
            'source': function (request, response) {
                $.ajax({
                    url: 'index.php?route=catalog/category/autocomplete&token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        json.unshift({
                            category_id: 0,
                            name: ' --- None --- '
                        });

                        response($.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['category_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                $('input[name=\'path\']').val(item['label']);
                $('input[name=\'parent_id\']').val(item['value']);
            }
        });
  //--></script> 
    <script type="text/javascript"><!--
        $('input[name=\'filter\']').autocomplete({
            'source': function (request, response) {
                $.ajax({
                    url: 'index.php?route=catalog/filter/autocomplete&token=dvy2kdt7YtpYXM0k4oGvNtz6peFuPRsJ&filter_name=' + encodeURIComponent(request),
                    dataType: 'json',
                    success: function (json) {
                        response($.map(json, function (item) {
                            return {
                                label: item['name'],
                                value: item['filter_id']
                            }
                        }));
                    }
                });
            },
            'select': function (item) {
                $('input[name=\'filter\']').val('');

                $('#category-filter' + item['value']).remove();

                $('#category-filter').append('<div id="category-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="category_filter[]" value="' + item['value'] + '" /></div>');
            }
        });

        $('#category-filter').delegate('.fa-minus-circle', 'click', function () {
            $(this).parent().remove();
        });
  //--></script> 
    <script type="text/javascript"><!--
        $('#language a:first').tab('show');
  //--></script></div>
<footer id="footer"><a href="http://www.opencart.com">OpenCart</a> &copy; 2009-2016 All Rights Reserved.<br />Version 2.1.0.2</footer></div>
    </body></html>
$(document).ready(function () {
                $("#searchBox").keyup(function () {

                    var query = $("#searchBox").val();



                    if (query.length > 0) {
                        $.ajax(
                            {
                                url: '../INCLUDES/research.php',
                                method: 'GET',
                                data: {
                                    search: 1,
                                    q: query

                            },
                                success: function (data) 
                                {
                                    $("#response").html(data);
                                    
                                },
                                dataType: 'text'
                            }
                        );
                    }
                });

                $(document).on('click', 'li', function () {
                    var film = $(this).text();
                    $("#searchBox").val(film);
                    $("#response").html("");
                });
            });
        
         
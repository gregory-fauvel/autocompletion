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

                // deuxieme

                $("#searchBox2").keyup(function () {

                    var query = $("#searchBox2").val();



                    if (query.length > 0) {
                        $.ajax(
                            {
                                url: '../INCLUDES/research.php',
                                method: 'GET',
                                data: {
                                    search2: 1,
                                    q: query

                            },
                                success: function (data) 
                                {
                                    $("#response2").html(data);
                                    
                                },
                                dataType: 'text'
                            }
                        );
                    }
                });

                $(document).on('click', 'li', function () {
                    var film = $(this).text();
                    $("#searchBox2").val(film);
                    $("#response2").html("");
                });
            });

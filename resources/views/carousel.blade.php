<div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/images/general/frontHouse.jpeg') }}" href="http://google.com" alt="Casita =)">
                                <div class="carousel-caption">
                                    <h3 align="center">Casita =)</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('/images/general/bedroom.jpeg') }}" href="http://google.com" alt="Manten en orden tu recamara =)">
                                <div class="carousel-caption">
                                    <h3 align="center">Manten limpia tu recamara =9</h3>
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('/images/general/kitchen.jpeg') }}" alt="Cocina en orden">
                                <div class="carousel-caption">
                                    <h3 align="center">Cocina en orden</h3>
                                </div>
                            </div>
                            <div class="item">
                                <img src="{{ asset('/images/general/world.jpeg') }}" alt="Todos por un mundo mejor">
                                <div class="carousel-caption">
                                    <h3 align="center">Todos por un mundo mejor</h3>
                                </div>
                            </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
</div>
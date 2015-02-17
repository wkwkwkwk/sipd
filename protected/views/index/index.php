  <!-- Navigation -->

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse-1">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-institution"></i> HOME
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navbar-main-collapse-1">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#contact">CONTACT</a>
                    </li> -->
                    <li>
                        <?php
                          if (!Yii::app()->user->isGuest){
                            echo CHtml::link(/*Yii::app()->user->username*/'ADMIN',array('/admin/index'));
                          }
                          else { ?>
                            <a href="<?php echo Yii::app()->request->baseUrl;?>/login"><i class="fa fa-fw fa-sign-in"></i> LOGIN</a>
                            
                         <?php }
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->

<header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xs-5">
                        <center><img class="img-responsive img-rounded" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/temaHome/img/bappeda.jpg" alt="Bappeda" width="150px" /></center><br />
                        
                            <table class="table">
                                <tr>
                                    <td><label>Alamat</label></td>
                                    <td>Jalan Jambu Karang No. 8 Purbalingga</td>
                                </tr>
                                <tr>
                                    <td><label>Kode Pos</label></td>
                                    <td>53311</td>
                                </tr>
                                <tr>
                                    <td><label>Kabupaten</label></td>
                                    <td>Purbalingga</td>
                                </tr>
                                <tr>
                                    <td><label>Provinsi</label></td>
                                    <td>Jawa Tengah</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <center><a href="https://www.google.com/maps/place/BAPPEDA+Kabupaten+Purbalingga/@-7.387149,109.363172,17z/data=!4m6!1m3!3m2!1s0x0:0xe18d0d7c7a86e5c1!2sBAPPEDA+Kabupaten+Purbalingga!3m1!1s0x0:0xe18d0d7c7a86e5c1" target="_blank"><input type="submit" class="btn btn-default btn-block" value="Lihat Lokasi via Google Maps" /></a></center>
                                    </td>
                                </tr>
                            </table>
                        
                    </div>
                    <div class="col-lg-9 col-md-9 col-xs-7">
                        <div class="jumbotron">
                            <h3>Selamat Datang di SIPD Kab. Purbalingga</h3><hr />
                            <p align="justify" style="font-size:17px;">
                                SIPD (Sistem Informasi Pembangunan Daerah) ialah suatu sistem yang mendokumentasikan, mengadministrasikan, serta mengolah data pembangunan daerah menjadi informasi yang disajikan kepada masyarakat dan bahan pengambilan keputusan dalam rangka perencanaan, pelaksanaan, evaluasi kinerja pemerintah daerah - (Permendagri No. 8 Tahun 2004).
                            </p>
                            <p align="justify" style="font-size:17px;">
                                Sistem ini berada di tingkat kabupaten/kota, yaitu pada <a href="http://purbalinggakab.go.id/" target="_blank">Kabupaten Purbalingga</a>. Dengan kata lain, sistem ini mengolah data-data kecamatan yang ada di Kabupaten Purbalingga. SIPD ini dikelola oleh Bappeda (Badan Perencanaan Pembangunan Daerah) Kabupaten Purbalingga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>    

    <!-- Contact Section -->
    <!-- <section id="contact" class="container content-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Kontak</h2>
                <p>Jika Anda ingin berkomunikasi lebih lanjut dengan pihak Bappeda, Anda dapat menghubungi kami dari website ini dengan mengisi form kontak di bawah ini.</p>
                <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <input type="text" placeholder="Nama Anda" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <input type="email" placeholder="Alamat Email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <input type="tel" placeholder="Nomor Telp." class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                
                                <textarea rows="5" placeholder="Pesan Anda" class="form-control" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <a href="mailto:carakawedhatama@gmail.com"><input type="submit" class="btn btn-default btn-lg" value="Kirim"></a>
                            </div>
                        </div>
                    </form> -->
                <!-- <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul> -->
            </div>
        </div>
    </section>
<?php
	if(!defined("INDEX")) die("---");
?>	
<div class="navbar navbar-inverse">
	<div class="header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<div class="icon-bar"></div>
			<div class="icon-bar"></div>
			<div class="icon-bar"></div>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">

                    <li>
                        <a href="?tampil=home">Home</a>
                    </li>
                    <li>
                        <a href="?tampil=tentangkami">Tentang Kami</a>
                    </li>
                       
                    
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="?tampil=home_otomotif" >Otomotif</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?tampil=home_ekonomi">Ekonomi</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?tampil=home_politik">Politik</a>
                                    </li>
                                    <li class="divider"></li>
                                     <li>
                                        <a href="?tampil=home_kriminal">Kriminal</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?tampil=home_olahraga">Olahraga</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?tampil=home_senidanbudaya">Seni Budaya</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?tampil=home_teknologi">Teknologi</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="?tampil=home_religi">Religi</a>
                                    </li>
                                </ul>
                            </li>
                    <li>
                        <a href="?tampil=kontak">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
	
		<form method="post" action="?tampil=pencarian" class=" search pull-right col-md-4">
			<div class="input-group">
				<input type="text" name="kata" placeholder="Cari di sini..." class="form-control"> 
				<span class="input-group-btn">
					<input type="submit" value="Cari" class="btn">
				</span>
			</div>
		</form>
		
	</div>
</div>
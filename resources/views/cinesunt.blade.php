@extends('layouts.app')

@section('meta-tags')
<meta property="og:image" content="http://x-ia.ro/images/exponential.png">
<meta property="og:description" content="Exponential - Cine sunt?">
<meta property="description" content="Exponential - Cine sunt?">

<title>Cine sunt? | Exponential</title>
@endsection

@section('content')
<section class="hero is-dark is-bold is-fullheight-with-navbar">
    <div class="hero-body">
        <div class="container">Cine sunt?
            <h1 class="title is-1">Alexandru Iacob</h1>
            <h2 class="subtitle is-3">Pasionat de tehnologie şi de natură</h2>
            <div class="social-media">
              <a href="https://www.facebook.com/alexandru.iacob.984" target="_blank" rel="noreferrer" class="button is-light is-medium"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="section-heading">
            <h3 class="title is-2">Despre mine</h3>
            <div class="columns">
                <div class="column">
                    <p>Fac sport, citesc – știință, economie, psihologie – şi mă plimb prin lume când am ocazia.</p><br>
                        <p>Profesor la <a href="http://www.cnpetrurares.ro" target="_blank">Colegiul Naţional Petru Rareş</a> din <strong>Piatra-Neamţ</strong>. Aparent predau geografie, germană și inventică. În realitate, fac educație.</p>
                </div>
                <div class="column">
                    <p>Inventator: posesor al <a href="http://bd.osim.ro/cgi-bin/invsearch8" target="_blank">brevetului de invenţie 111545</a> acordat de către Oficiul de Stat pentru Invenţii şi Mărci.<br><br>
                        Am inițiat și organizat evenimentul național <strong>Hai în viitor!</strong>, dedicat impactului tehnologiei asupra societății.</p>
                </div>
                <div class="column">
                    <div class="content">
                        <p>În ianuarie 2015, o echipă de elevi de la <strong>Colegiul Național Petru Rareș</strong> din Piatra Neamț a câștigat <strong>Zayed Future Energy Prize</strong>.
                            Iată câteva linkuri din care poți afla mai multe despre acest proiect:
                            <ul style="list-style-type: circle; list-style-position: inside;">
                                <li><a href="http://stiri.tvr.ro/un-proiect-ecologic-al-liceenilor-de-la-petru-rares-din-piatra-neamt-premiat-cu-100-000-de-dolari_56415.html" target="_blank">Știrele TVR</a></li>
                                <li><a href="http://abudhabi.mae.ro/gallery/963" target="_blank">Ambasada României în EAU</a></li>
                                <li><a href="http://adevarul.ro/locale/piatra-neamt/liceenii-petru-rares-piatra-neamt-castigatori-zayed-future-prize-energy-foto-florin-jbanca-7_54cb896b448e03c0fd1cacec/2_54cb8a46448e03c0fd1cb171.html#photo-head"
                                      target="_blank">Adevărul</a></li>
                                <li><a href="http://radioiasi.ro/fapt-divers/neamt-colegiul-petru-rares-castigator-al-premiului-zayed-future-energy-din-emiratele-arabe-unite/" target="_blank">Radio Iași</a></li>
                                <li><a href="http://www.ziarpiatraneamt.ro/portia-de-cunoastere-reinventeaza-scoala-invitat-prof-alexandru-iacob-membrii-echipei" target="_blank">ZiarPiatraNeamt</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@section('scripts')
<script async src="https://kit.fontawesome.com/a65b76eb2a.js" crossorigin="anonymous"></script>
@endsection
@endsection

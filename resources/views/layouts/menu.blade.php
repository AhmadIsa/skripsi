<li class="{{ Request::is('pertanyaans*') ? 'active' : '' }}">
    <a href="{!! route('pertanyaans.index') !!}"><i class="fa fa-edit"></i><span>Konsultasi</span></a>
</li>

<li class="{{ Request::is('umurs*') ? 'active' : '' }}">
    <a href="{!! route('umurs.index') !!}"><i class="fa fa-edit"></i><span>Umurs</span></a>
</li>

<li class="{{ Request::is('bobots*') ? 'active' : '' }}">
    <a href="{!! route('bobots.index') !!}"><i class="fa fa-edit"></i><span>Bobots</span></a>
</li>

<li class="{{ Request::is('beratdantinggis*') ? 'active' : '' }}">
    <a href="{!! route('beratdantinggis.index') !!}"><i class="fa fa-edit"></i><span>Beratdantinggis</span></a>
</li>

<li class="{{ Request::is('riwayatCideras*') ? 'active' : '' }}">
    <a href="{!! route('riwayatCideras.index') !!}"><i class="fa fa-edit"></i><span>Riwayat Cideras</span></a>
</li>

<li class="{{ Request::is('keyakinanBeratdantinggis*') ? 'active' : '' }}">
    <a href="{!! route('keyakinanBeratdantinggis.index') !!}"><i class="fa fa-edit"></i><span>Keyakinan Beratdantinggis</span></a>
</li>

<li class="{{ Request::is('keyakinanUmurs*') ? 'active' : '' }}">
    <a href="{!! route('keyakinanUmurs.index') !!}"><i class="fa fa-edit"></i><span>Keyakinan Umurs</span></a>
</li>








@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Beratdantinggi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($beratdantinggi, ['route' => ['beratdantinggis.update', $beratdantinggi->id], 'method' => 'patch']) !!}

                        @include('beratdantinggis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
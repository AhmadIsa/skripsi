@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bobot
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bobot, ['route' => ['bobots.update', $bobot->id], 'method' => 'patch']) !!}

                        @include('bobots.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
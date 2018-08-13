@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Umur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($umur, ['route' => ['umurs.update', $umur->id], 'method' => 'patch']) !!}

                        @include('umurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
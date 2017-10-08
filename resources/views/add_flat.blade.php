@extends('layouts.app')

@section('content')
<div class="add_flat_block">
    <h4 class="add_flat_title">Пожалуйста, заполните форму заявки на продажу вашей квартиры в рассрочку. </h4>
    <p class="add_flat_description">Чем полней и подробней вы заполните заявку, тем скорее мы подберем покупателя квартиры.</p>
    {!! Form::open(['route' => 'add_flat','class'=>'add_flat_form']) !!}

    <div class="add_flat_form_part">
        <span>Укажите расположение квартиры:</span>
        <div class="form_part_inputs_block">
            <div class="add_flat_form_row">
                <div class="form_row_part">

                    {{Form::select('add_flat_form_city',[
                        'krasnodar'=>'Краснодар',
                        'moscow'=>'Москва',
                        'piter'=>'Питер',
                        ],
                        'krasnodar',
                        ['class'=>'form_select']
                    )}}

                    {{Form::select('add_flat_form_district',[
                        'prikubansky'=>'пиркубанский',
                        'karasun'=>'Карасунский',
                        'center'=>'Центральный',
                        'west'=>'Западный',
                        ]
                        ,'prikubansky',
                        ['class'=>'form_select']
                    )}}
                </div>

                <div class="form_row_part">
                    {{Form::text('add_flat_form_street','',['class'=>'form_input','placeholder'=>'название улицы'])}}
                    {{Form::text('add_flat_form_house_number','',['class'=>'form_input','placeholder'=>'номер дома'])}}
                </div>
            </div>
            <div class="add_flat_form_row">
                {{Form::text('add_flat_form_dop_info','',['class'=>'form_input','placeholder'=>'дополнительная информация о расположении, например номер подъезда, квартиры и т.д.'])}}

            </div>
        </div>
    </div>

    <div class="add_flat_form_part">
        <span>Основная информация о квартире:</span>
        <div class="form_part_inputs_block">
            <div class="add_flat_form_row">
                <div class="form_row_part"></div>
                <div class="form_row_part"></div>
            </div>
            <div class="add_flat_form_row">
                <div class="form_row_part"></div>
                <div class="form_row_part"></div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>
@stop
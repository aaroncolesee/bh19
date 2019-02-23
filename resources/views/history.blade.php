@extends('layouts.app')

@section('content')

<style>

.day {
    font-family: "HWT Slab Antique";
    font-size: 75px;
    display: flex;
    justify-content: center;
    margin-top: 28px;
    margin-bottom: 8px;
}

.title {
    font-family: "Rift Soft";font-size: 20px;display: flex;justify-content: center;margin-top: 32px;
}

.four-row-card {
    background-color: #434244;color: #FEFEFE;height: 260px;min-width: 260px;margin-bottom: 50px;
}

.four-row-card.special {
    border: 1px solid #434244;
    color: #434244;
    background-color: #FEFEFE;
    height: 258px;
    min-width: 260px;
}

.four-row-card .month {
    font-family: "HWT Slab Antique";
    font-size: 35px;display: flex;justify-content: center;margin-bottom: 33px;
}

</style>
<div class="container">
    <div class="row justify-content-center">

        <div class="four-column-row" style="display: flex;justify-content: space-between;align-items: stretch;flex-direction: row;flex-wrap: wrap;">;
             <div class='four-row-card' style="background-color: #434244;color: #FEFEFE;height: 260px;min-width: 260px;margin-bottom: 50px;">
                     <p class="title" style="font-size: 20px;display: flex;justify-content: center;margin-top: 32px;">
                         "Untitled"</p>
                    <p class="day" style="font-size: 75px;display: flex;justify-content: center;margin-top: 28px;margin-bottom: 8px;">
                         23</h1>
                     <h5 class="month" style="font-size: 35px;display: flex;justify-content: center;margin-bottom: 33px;">
                         Feb</h5>
              </div>
        </div>


         </div>
     </div>


@endsection

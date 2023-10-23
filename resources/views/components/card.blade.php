<div {{$attributes->merge(['class' => 'bg-gray-50  
    border border-gray-200 rounded p-6'])}}>  <!-- permitndo o override / implement de classes na tag -->

{{$slot}} <!-- component que sera wrapped-->

</div>
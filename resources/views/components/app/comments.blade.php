<div id="comments" class="mb-8 w-full mx-auto space-y-12">
    <x-app.comments-form :model="$model"/>

    @if(count($model->comments))
        <x-app.comments-list :comments="$model->comments"/>
    @endif
</div>




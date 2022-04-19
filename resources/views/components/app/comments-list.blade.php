@props(['comments'])

<ul role="list" class="space-y-8">
    @foreach($comments as $comment)
        <li>
            <div class="flex space-x-3">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://aui.atlassian.com/aui/latest/docs/images/avatar-person.svg" alt="">
                </div>
                <div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-gray-900">{{ $comment->name }}</a>
                    </div>
                    <div class="mt-1 text-sm text-gray-700">
                        <p>{{ $comment->comment }}.</p>
                    </div>
                    <div class="mt-2 text-sm space-x-2">
                        <span class="text-gray-500 font-medium">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </li>
    @endforeach

</ul>

@props(['user','size' => 'w-12 h-12'])

@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->name }}" class="{{ $size }} rounded-full">
@else
    <img src="https://imgs.search.brave.com/GH0DWT1kuxlsr4wGH40ixHh0QvnKD4BJxZZ1_OQNKyw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9waXh5/Lm9yZy9zcmMvMzEv/dGh1bWJzMzUwLzMx/NTE2MC5qcGc"
        alt="Dummy Avatar" class="{{ $size }} rounded-full">
@endif
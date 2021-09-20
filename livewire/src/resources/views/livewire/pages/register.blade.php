<form wire:submit.prevent="register">
<div>
    <label for="email">
        email:
    </label>
    <input
        wire:model="email"
        type="text"
        name="email"
        id="email"
    />
    @error('email') <span>{{$message}}</span> @enderror
</div>

<div>
    <label for="name">
        name:
    </label>
    <input
        wire:model="name"
        type="text"
        name="name"
        id="name"
    />
    @error('name') <span>{{$message}}</span> @enderror
</div>


<div>
    <label for="password">
        password:
    </label>
    <input
        wire:model="password"
        type="text"
        name="password"
        id="password"
    />
    @error('email') <span>{{$message}}</span> @enderror
</div>

<div>
    <label for="passwordConfirmation">
        passwordConfirmation:
    </label>
    <input
        wire:model="passwordConfirmation"
        type="text"
        name="passwordConfirmation"
        id="passwordConfirmation"
    />
    @error('email') <span>{{$message}}</span> @enderror
</div>
    <div>
        <button
            type="submit"
        >
            Register
        </button>
    </div>
</form>

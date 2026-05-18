<div class="form-group">
    <label>Autor (opcional)</label>
    <input
        type="text"
        class="form-control"
        name="author"
        list="opinion-authors"
        value="{{ old('author', $authorValue ?? '') }}"
        autocomplete="off"
    >
    <datalist id="opinion-authors">
        @foreach($existingAuthors as $author)
            <option value="{{ $author }}"></option>
        @endforeach
    </datalist>
    @error('author')
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>

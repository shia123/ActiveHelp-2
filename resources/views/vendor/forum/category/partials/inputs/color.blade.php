<div class="mb-3">
    <label for="color: green;"></label>
    <div class="pickr"></div>
    <input type="hidden" value="{{ isset($category->color) ? $category->color : (old('color') ?? config('forum.web.default_category_color')) }}" name="color">
</div>
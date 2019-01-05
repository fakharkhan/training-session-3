<div class="form-group">
    <label for="fc-{{ $name }}">{{ isset($label) ? $label : ucfirst($name) }}</label>
    <input type="text" class="form-control"
           id="fc-{{ $name }}"
           name="{{ $name }}"
           placeholder="{{ isset($placeholder) ? $placeholder : (isset($label) ? $label : ucfirst($name)) }}">
</div>
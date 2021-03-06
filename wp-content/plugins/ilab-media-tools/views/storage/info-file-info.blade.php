@if ($imgixEnabled && !isset($topLevel))
<div class="info-line info-notice">
    You are using Imgix which handles generating all of the additional sizes of images.
</div>
<div class="links-row">
    <a href="{{$publicUrl}}" target="_blank"><span class="dashicons dashicons-external"></span>Public URL</a>
</div>
@elseif (!$uploaded)
<div class="info-line">
Not uploaded.
</div>
@else
<div class="info-line">
	<h3>Dimensions</h3>
	{{$width}} x {{$height}}
</div>
<div class="info-line">
    <h3>Storage Service</h3>
    {{$driverName}}
</div>
<div class="info-line">
	<h3>Bucket</h3>
    @if ($bucketLink)
	<a href="{{$bucketLink}}" target="_blank">{{$bucket}}</a>
    @else
    {{$bucket}}
    @endif
</div>
<div class="info-line">
	<h3>Path</h3>
    @if ($pathLink)
    <a href="{{$pathLink}}" target="_blank">{{$key}}</a>
    @else
    {{$key}}
    @endif
</div>
@if(!empty($optimization))
<div class="info-line">
	<h3>Optimization</h3>
	@if($optimization['totalBytes'] > 0)
		{{sprintf('%.1f%%', ((1.0 - $optimization['optimizedBytes'] / $optimization['totalBytes'])) * 100.0)}} &mdash;
	@endif
	{{size_format($optimization['optimizedBytes'])}} (was {{size_format($optimization['totalBytes'])}})
</div>
@endif
@if (!$isSize)
<div class="info-line">
    <label for="s3-access-acl">Access</label>
    {{$privacy}}
</div>
<div class="info-line">
    <label for="s3-cache-control">Cache-Control</label>
    {{ (empty($cacheControl)) ? 'None' : $cacheControl }}
</div>
<div class="info-line">
    <label for="s3-expires">Expires</label>
    {{(empty($expires)) ? 'None' : $expires}}
</div>
@if ($readOnly)
@else
<div class="info-line">
	<label for="s3-access-acl">Access</label>
	<select id="s3-access-acl" name="s3-access-acl">
		<option value="public-read" {{ ($privacy == 'public-read') ? 'selected' : '' }}>
		Public
		</option>
		<option value="authenticated-read" {{ ($privacy == 'authenticated-read') ? 'selected' : '' }}>
			Authenticated Users
		</option>
		<option value="private" {{ ($privacy == 'private') ? 'selected' : '' }}>
			Private
		</option>
	</select>
</div>
<div class="info-line">
	<label for="s3-cache-control">Cache-Control</label>
	<input type="text" class="widefat" name="s3-cache-control" id="s3-cache-control" value="{{ $cacheControl }}">
</div>
<div class="info-line">
	<label for="s3-expires">Expires</label>
	<input type="text" class="widefat" name="s3-expires" id="s3-expires" value="{{$expires}}">
</div>
@endif
@endif
<div class="links-row">
	<a href="{{$url}}" target="_blank"><span class="dashicons dashicons-external"></span>Storage URL</a>
	@if (!empty($publicUrl) && ($publicUrl != $url))
	<a href="{{$publicUrl}}" target="_blank"><span class="dashicons dashicons-external"></span>Public URL</a>
	@endif
</div>
@endif

<div class="form">

  <form class="form__field dz" action="api/files/upload" dropzone done="submit()">
    <strong>Drop files here…</strong>
    <small>or click to upload</small>
    <input type="hidden" name="uri" ng-value="page.uri">
  </form>

  <div class="form__buttons form__buttons--centered">
    <input tabindex="-1" type="reset" class="form__button" ng-click="close()" value="cancel">
  </div>
</div>
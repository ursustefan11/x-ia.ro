<!-- {{-- <div class="js-cookie-consent cookie-consent">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree">
        {{ trans('cookieConsent::texts.agree') }}
</button>

</div> --}} -->
<div class="notification is-link js-cookie-consent m-b-0" style="border-radius: 0; display: block; position: fixed; bottom: 0; width: 100%; z-index: 999999">
    <div class="columns is-fixed-bottom is-vcentered">
        <div class="column">
            <p>
                {!! trans('cookieConsent::texts.message') !!}
            </p>
        </div>
        <div class="column">
            <button class="button is-light is-pulled-right js-cookie-consent-agree">
                {!! trans('cookieConsent::texts.agree') !!}
            </button>
            <a href="/cookies" class="button is-light is-pulled-right m-r-10">Citeste mai mult</a>
        </div>
    </div>
</div>

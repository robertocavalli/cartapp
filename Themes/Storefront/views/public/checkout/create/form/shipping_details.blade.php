<div class="shipping-details">
    <div class="row">
        <div class="col-md-18">
            <div class="form-group ship-to-different-address-label">
                <div class="form-check">
                    <input
                        type="checkbox"
                        name="ship_to_a_different_address"
                        v-model="form.ship_to_a_different_address"
                        id="ship-to-different-address"
                    >

                    <label for="ship-to-different-address" class="form-check-label">
                        {{ trans('checkout::attributes.ship_to_a_different_address') }}
                    </label>
                </div>
            </div>

            <div class="ship-to-different-address-form" v-show="form.ship_to_a_different_address" v-cloak>
                <h4 class="section-title">{{ trans('storefront::checkout.shipping_details') }}</h4>

                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="shipping-first-name">
                                {{ trans('checkout::attributes.shipping.first_name') }}<span>*</span>
                            </label>

                            <input
                                type="text"
                                name="shipping[first_name]"
                                v-model="form.shipping.first_name"
                                id="shipping-first-name"
                                class="form-control"
                            >

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.first_name')"
                                v-text="errors.get('shipping.first_name')"
                            >
                            </span>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="shipping-last-name">
                                {{ trans('checkout::attributes.shipping.last_name') }}<span>*</span>
                            </label>

                            <input
                                type="text"
                                name="shipping[last_name]"
                                v-model="form.shipping.last_name"
                                id="shipping-last-name"
                                class="form-control"
                            >

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.last_name')"
                                v-text="errors.get('shipping.last_name')"
                            >
                            </span>
                        </div>
                    </div>

                    <div class="col-md-18">
                        <div class="form-group">
                            <label for="shipping-address-1">
                                {{ trans('checkout::attributes.street_address') }}<span>*</span>
                            </label>

                            <input
                                type="text"
                                name="shipping[address_1]"
                                v-model="form.shipping.address_1"
                                id="shipping-address-1"
                                class="form-control"
                                placeholder="{{ trans('checkout::attributes.shipping.address_1') }}"
                            >

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.address_1')"
                                v-text="errors.get('shipping.address_1')"
                            >
                            </span>
                        </div>

                        <div class="form-group">
                            <input
                                type="text"
                                name="shipping[address_2]"
                                v-model="form.shipping.address_2"
                                class="form-control"
                                placeholder="{{ trans('checkout::attributes.shipping.address_2') }}"
                            >
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="shipping-city">
                                {{ trans('checkout::attributes.shipping.city') }}<span>*</span>
                            </label>

                            <input
                                type="text"
                                name="shipping[city]"
                                :value="form.shipping.city"
                                id="shipping-city"
                                class="form-control"
                                @change="changeShippingCity($event.target.value)"
                            >

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.city')"
                                v-text="errors.get('shipping.city')"
                            >
                            </span>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="shipping-zip">
                                {{ trans('checkout::attributes.shipping.zip') }}<span>*</span>
                            </label>

                            <input
                                type="text"
                                name="shipping[zip]"
                                :value="form.shipping.zip"
                                id="shipping-zip"
                                class="form-control"
                                @change="changeShippingZip($event.target.value)"
                            >

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.zip')"
                                v-text="errors.get('shipping.zip')"
                            >
                            </span>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="shipping-country">
                                {{ trans('checkout::attributes.shipping.country') }}<span>*</span>
                            </label>

                            <select
                                name="shipping[country]"
                                :value="form.shipping.country"
                                id="shipping-country"
                                class="form-control arrow-black"
                                @change="changeShippingCountry($event.target.value)"
                            >
                                <option
                                    v-for="(name, code) in countries"
                                    :value="code"
                                    v-text="name"
                                >
                                </option>
                            </select>

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.country')"
                                v-text="errors.get('shipping.country')"
                            >
                            </span>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="shipping-state">
                                {{ trans('checkout::attributes.shipping.state') }}<span>*</span>
                            </label>

                            <input
                                type="text"
                                name="shipping[state]"
                                :value="form.shipping.state"
                                id="shipping-state"
                                class="form-control"
                                v-if="! hasShippingStates"
                                @change="changeShippingState($event.target.value)"
                            >

                            <select
                                name="shipping[state]"
                                v-model="form.shipping.state"
                                id="shipping-state"
                                class="form-control arrow-black"
                                v-else
                                v-cloak
                            >
                                <option value="">{{ trans('storefront::checkout.please_select') }}</option>

                                <option
                                    v-for="(name, code) in states.shipping"
                                    :value="code"
                                    v-text="name"
                                >
                                </option>
                            </select>

                            <span
                                class="error-message"
                                v-if="errors.has('shipping.state')"
                                v-text="errors.get('shipping.state')"
                            >
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

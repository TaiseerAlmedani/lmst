<x-layouts.app>
    <x-navbar />
 Enroll page
    <section class="section">
        <form action="">
            <div class="columns">
                <div class="column is-4">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">First Name</label>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="john">
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">last Name</label>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="snow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email Address</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-rounded" type="email" placeholder="me@mail.com">
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-rounded is-right">
                                <i class="fa fa-check"></i>
                            </span>
                        </div>
                    </div>
                    {{-- <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
                    <div class="field">
                        <label class="label">any thing to add</label>
                        <div class="control">
                            <textarea class="textarea is-rounded" placeholder="optional"></textarea>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="checkbox ">
                                <input type="checkbox">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                    </div>
                    {{-- <div class="field">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="question">
                                Yes
                            </label>
                            <label class="radio">
                                <input type="radio" name="question">
                                No
                            </label>
                        </div>
                    </div> --}}


                    <div class="file has-name is-fullwidth">
                        <label class="file-label">
                            <input class="file-input" type="file" name="resume">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fa fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Upload the transfer picture
                                </span>
                            </span>
                            <span class="file-name">

                            </span>
                        </label>
                    </div>
                    <br />

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-dark"><span class="has-text-warning">S</span>ubmit</button>
                        </div>
                        <div class="control">
                            <button type="reset" value="reset" class="button is-dark is-light"><span class="has-text-warning">C</span>ancel</button>
                        </div>
                    </div>
                </div>


                        <div class="notification is-dark is-max-widescreen" style="width: 100%">
                            <h1 class="has-text-centered is-size-3"><span class="has-text-warning">E</span>nroll <span class="has-text-warning">T</span>he <span class="has-text-warning">C</span>ourse</h1>
                        <div class="columns">
                            <div class="column is-6">
                        <ol>
                            <li>transfare the course salary to this account</li>
                            <li>fill your information</li>
                            <li>attache a photo for the recied</li>
                            <li>submite the info</li>
                        </ol>
                        <h4>after the submait you will recive a confirem email ,and the re fresh the page to enroll the course , it take max 2 houres after you sent the info</h4>
                        <br><hr>

                        <button class="button ml-6 is-large is-warning is-hovered" >
                            <span class="icon is-small">
                              <i class="fa fa-refresh"></i>
                            </span>
                            <span>All set! Refresh Pag</span>
                          </button>
                    </div>
                <div class="column is-6">
                    <img src="{{ asset('/images/how.svg') }}" alt="" width="100%" height="100%">
                </div>
            </div>
                    </div>
                </div>


        </form>
    </section>


</x-layouts.app>

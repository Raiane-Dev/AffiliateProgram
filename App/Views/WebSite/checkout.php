<div class="form checkout">
        <div>
            <h2>Checkout | Buy Course</h2>
            <p>Code of the affiliate who will receive the commission: <?= $code ?>
               <br /> Name course: <?= $course['name']; ?>
            </p><br /><br />
            <button>Lorem ipsum</button>
        </div>
        <div>
            <form method="post" enctype="multipart/form-data">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your name" />

                <label>Email</label>
                <input type="text" name="email" placeholder="Your email" />

                <label>Document</label>
                <input type="text" name="document" placeholder="Document" />

                <label>Document Type</label>
                <select name="document_type">
                    <option value="CPF">CPF</option>
                    <option value="CNPJ">CNPJ</option>
                    <option value="PASSPORT">PASSPORT</option>
                </select>
                
                <label>Gender</label>
                <input type="text" name="gender" placeholder="Gender" />
                
                <label>Country</label>
                <input type="text" name="country" placeholder="Country" />

                <label>State</label>
                <input type="text" name="state" placeholder="State" />

                <label>City</label>
                <input type="text" name="city" placeholder="City" />

                <label>Zip Code</label>
                <input type="text" name="zip_code" placeholder="Zip code" />

                <label>Line 1</label>
                <input type="text" name="line_1" placeholder="Line 1" />

                <label>Line 2</label>
                <input type="text" name="line_2" placeholder="Line 2" />
                
                <label>Birthdate</label>
                <input type="date" name="birthdate" placeholder="Birthdate" />

                <label>Password</label>
                <input type="password" name="password" placeholder="Password" />
                
                <label>Payment Methods</label>
                <select name="payment_method" id="payment_method">
                    <option>Select</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="voucher">Voucher</option>
                    <option value="boleto">Boleto</option>
                    <option value="bank_transfer">Bank Transfer</option>
                    <option value="pix">PIX</option>
                </select>
                
                <div id="credit_card">
                    <label>installments</label>
                    <select name="installments">
                        <?php for($i = 1; $i <= 12; $i++){ ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php } ?>
                    </select>
                    
                    <label>Card Number</label>
                    <input type="text" name="number" placeholder="number" />
                    
                    <label>Holder Name</label>
                    <input type="text" name="holder_name" placeholder="Holder Name" />

                    <label>Holder Document</label>
                    <select name="holder_document">
                        <option value="CPF">CPF</option>
                        <option value="CNPJ">CNPJ</option>
                        <option value="PASSPORT">PASSPORT</option>
                    </select>
                    
                    <label>Exp Month</label>
                    <input type="number" name="exp_month" placeholder="Exp Month" />
                    
                    <label>Exp Year</label>
                    <input type="number" name="exp_year" placeholder="Exp Year" />
                    
                    <label>CVV</label>
                    <input type="number" name="cvv" placeholder="CVV" />
                    
                    <label>Brand</label>
                    <select name="brand">
                        <option value="Elo">Elo</option>
                        <option value="Mastercard">Mastercard</option>
                        <option value="Visa">Visa</option>
                        <option value="Amex">Amex</option>
                        <option value="JCB">JCB</option>
                        <option value="Aura">Aura</option>
                        <option value="Hipercard">Hipercard</option>
                        <option value="Diners">Diners</option>
                        <option value="Discover">Discover</option>
                    </select>
                    
                    <label>Label</label>
                    <input type="text" name="label" placeholder="Label" />
                </div>

                <div id="voucher">
                    <label>Statement Descriptor</label>
                    <input type="text" name="statement_descriptor" placeholder="Statement Descriptor" />
                    
                    <label>Card Number</label>
                    <input type="text" name="number" placeholder="number" />
                    
                    <label>Holder Name</label>
                    <input type="text" name="holder_name" placeholder="Holder Name" />

                    <label>Holder Document</label>
                    <input type="text" name="holder_document" placeholder="Holder Document" />
                    
                    <label>Exp Month</label>
                    <input type="text" name="exp_month" placeholder="Exp Month" />
                    
                    <label>Exp Year</label>
                    <input type="text" name="exp_year" placeholder="Exp Year" />
                    
                    <label>CVV</label>
                    <input type="text" name="cvv" placeholder="CVV" />
                    
                    <select name="brand">
                        <option value="Alelo">Alelo</option>
                        <option value="VR">VR</option>
                        <option value="Sodexo">Sodexo</option>
                    </select>
                    
                    <label>Label</label>
                    <input type="text" name="label" placeholder="Label" />
                </div>

                <div id="boleto">
                    <label>Bank</label>
                    <input type="text" name="bank" placeholder="Bank" />
                    
                    <label>Instructions</label>
                    <input type="text" name="instructions" placeholder="Instructions" />
                    
                    <label>Due at</label>
                    <input type="text" name="due_at" placeholder="Due at" />
                    
                    <label>Nosso numero</label>
                    <input type="text" name="nosso_numero" placeholder="Nosso Número" />
                    
                    <label>Type</label>
                    <input type="text" name="type" placeholder="Type" />
                    
                    <label>Document Number</label>
                    <input type="text" name="document_number" placeholder="Document Number" />
                </div>

                <div id="bank_transfer">
                    <label>Bank</label>
                    <input type="text" name="bank" placeholder="Bank" />
                </div>

                <div id="pix">
                    <label>Bank</label>
                    <input type="text" name="bank" placeholder="Bank" />
                </div>

                <input type="submit" value="Access" name="action" />
            </form>
        </div>
    </div>
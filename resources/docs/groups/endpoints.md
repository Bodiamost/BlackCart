# Endpoints


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## api/stores/{storeId}/products




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/stores/atque/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/stores/atque/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (400):

```json
{
    "error": "No store found"
}
```
<div id="execution-results-GETapi-stores--storeId--products" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-stores--storeId--products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stores--storeId--products"></code></pre>
</div>
<div id="execution-error-GETapi-stores--storeId--products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stores--storeId--products"></code></pre>
</div>
<form id="form-GETapi-stores--storeId--products" data-method="GET" data-path="api/stores/{storeId}/products" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-stores--storeId--products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-stores--storeId--products" onclick="tryItOut('GETapi-stores--storeId--products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-stores--storeId--products" onclick="cancelTryOut('GETapi-stores--storeId--products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-stores--storeId--products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/stores/{storeId}/products</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>storeId</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="storeId" data-endpoint="GETapi-stores--storeId--products" data-component="url" required  hidden>
<br>
</p>
</form>




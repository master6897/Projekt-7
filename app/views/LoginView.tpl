{extends file="main.tpl"}

{block name=content}
        <form action="{$config->action_root}login" method="post" class="pure-form pure-form-stacked">
            <fieldset>
                <label>Proszę podać login:</label>
                <input type="text" name="login" placeholder="login"></input>
                <label>Prosze podać hasło:</label>
                <input type="password" name="password"></input>
                <input type="submit" value="Zaloguj się!" class="pure-button pure-button-primary"></input>
            </fieldset>
        </form>
{if $messages->isError()}
    {foreach $messages->getErrors() as $mess }
        {strip}
        <h3 style="color:red;">{$mess}</h3>
        {/strip}
        {/foreach}
{/if}

{/block}
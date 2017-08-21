<?php

/* /Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/contactForm/default.htm */
class __TwigTemplate_c8b606ced428aa229d5c75b318e9b63fa87a5e41b431aa58ff329177233814d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form data-request=\"";
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "

    <div class=\"form-cont\">
        <!-- name -->
        <div class=\"input-field\">
            <input type=\"text\" id=\"name\" name=\"name\">
            <label for=\"name\" class=\"mat-label\">Név*</label>
        </div>
        <!-- name -->
        <!-- phone -->
        <div class=\"input-field\">
            <input type=\"text\" id=\"phone\" name=\"phone\">
            <label for=\"phone\" class=\"mat-label\">Telefon*</label>
        </div>
        <!-- phone -->
        <!-- email -->
        <div class=\"input-field\">
            <input type=\"text\" id=\"email\" name=\"email\">
            <label for=\"email\" class=\"mat-label\">E-mail*</label>
        </div>
        <!-- email -->
        <!-- textarea -->
        <div class=\"input-field\">
            <textarea id=\"message\" class=\"materialize-textarea\" name=\"message\"></textarea>
            <label for=\"message\">Üzenet</label>
        </div>
        <!-- textarea -->
        <div class=\"clear\"></div>

        <!-- FLASH -->
        <div class=\"flash-cont\">
            <div id=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["contactForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
        </div><!-- flash-cont -->
        <div class=\"clear\"></div>
        <!-- FLASH -->

        <div class=\"submit-cont\">
            <!-- submit -->
            <button type=\"submit\" class=\"waves-effect waves-light btn right\">Elküld</button>
            <!-- submit -->
        </div><!-- submit cont -->

        <div class=\"clear\"></div>
    </div><!-- form-cont -->

</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/contactForm/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 34,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form data-request=\"{{ contactForm }}::onFormSubmit\">

    {{ form_token() }}

    <div class=\"form-cont\">
        <!-- name -->
        <div class=\"input-field\">
            <input type=\"text\" id=\"name\" name=\"name\">
            <label for=\"name\" class=\"mat-label\">Név*</label>
        </div>
        <!-- name -->
        <!-- phone -->
        <div class=\"input-field\">
            <input type=\"text\" id=\"phone\" name=\"phone\">
            <label for=\"phone\" class=\"mat-label\">Telefon*</label>
        </div>
        <!-- phone -->
        <!-- email -->
        <div class=\"input-field\">
            <input type=\"text\" id=\"email\" name=\"email\">
            <label for=\"email\" class=\"mat-label\">E-mail*</label>
        </div>
        <!-- email -->
        <!-- textarea -->
        <div class=\"input-field\">
            <textarea id=\"message\" class=\"materialize-textarea\" name=\"message\"></textarea>
            <label for=\"message\">Üzenet</label>
        </div>
        <!-- textarea -->
        <div class=\"clear\"></div>

        <!-- FLASH -->
        <div class=\"flash-cont\">
            <div id=\"{{ contactForm }}_forms_flash\"></div>
        </div><!-- flash-cont -->
        <div class=\"clear\"></div>
        <!-- FLASH -->

        <div class=\"submit-cont\">
            <!-- submit -->
            <button type=\"submit\" class=\"waves-effect waves-light btn right\">Elküld</button>
            <!-- submit -->
        </div><!-- submit cont -->

        <div class=\"clear\"></div>
    </div><!-- form-cont -->

</form>", "/Applications/MAMP/htdocs/tinnyeovi/themes/tinnyeovi/partials/contactForm/default.htm", "");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_ab6fe07923115a5002b100df897d2e4fa4cda7355e31e6182e8076dafbf22f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c129c377dd8645a3174f2537f1e02566c3e07b52cd9e2c25bc9b61ca6e6c7091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c129c377dd8645a3174f2537f1e02566c3e07b52cd9e2c25bc9b61ca6e6c7091->enter($__internal_c129c377dd8645a3174f2537f1e02566c3e07b52cd9e2c25bc9b61ca6e6c7091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_48486fba236c5342f83a691198e658e82e7bd6a42727f2b50b91fd8390f4fca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48486fba236c5342f83a691198e658e82e7bd6a42727f2b50b91fd8390f4fca2->enter($__internal_48486fba236c5342f83a691198e658e82e7bd6a42727f2b50b91fd8390f4fca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made withh <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>

";
        
        $__internal_c129c377dd8645a3174f2537f1e02566c3e07b52cd9e2c25bc9b61ca6e6c7091->leave($__internal_c129c377dd8645a3174f2537f1e02566c3e07b52cd9e2c25bc9b61ca6e6c7091_prof);

        
        $__internal_48486fba236c5342f83a691198e658e82e7bd6a42727f2b50b91fd8390f4fca2->leave($__internal_48486fba236c5342f83a691198e658e82e7bd6a42727f2b50b91fd8390f4fca2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffe44340e1d365d8cb6f73fb721c87d15e1f5b117f1f50227aed04900e6027cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe44340e1d365d8cb6f73fb721c87d15e1f5b117f1f50227aed04900e6027cd->enter($__internal_ffe44340e1d365d8cb6f73fb721c87d15e1f5b117f1f50227aed04900e6027cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7c66e93430603585df3ba2ead724491bafc63dd592c60627f3a8f7c87b67ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c66e93430603585df3ba2ead724491bafc63dd592c60627f3a8f7c87b67ace->enter($__internal_b7c66e93430603585df3ba2ead724491bafc63dd592c60627f3a8f7c87b67ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_b7c66e93430603585df3ba2ead724491bafc63dd592c60627f3a8f7c87b67ace->leave($__internal_b7c66e93430603585df3ba2ead724491bafc63dd592c60627f3a8f7c87b67ace_prof);

        
        $__internal_ffe44340e1d365d8cb6f73fb721c87d15e1f5b117f1f50227aed04900e6027cd->leave($__internal_ffe44340e1d365d8cb6f73fb721c87d15e1f5b117f1f50227aed04900e6027cd_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43ad4b5d8c16f8d4fe2ed485421fdb9006c9fdc26f125220e921f5f4afbc0f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ad4b5d8c16f8d4fe2ed485421fdb9006c9fdc26f125220e921f5f4afbc0f3e->enter($__internal_43ad4b5d8c16f8d4fe2ed485421fdb9006c9fdc26f125220e921f5f4afbc0f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_538686ff8618451c5fb82316b668f3f3fa788358bd04ba32f4b4df20f728bf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538686ff8618451c5fb82316b668f3f3fa788358bd04ba32f4b4df20f728bf40->enter($__internal_538686ff8618451c5fb82316b668f3f3fa788358bd04ba32f4b4df20f728bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_538686ff8618451c5fb82316b668f3f3fa788358bd04ba32f4b4df20f728bf40->leave($__internal_538686ff8618451c5fb82316b668f3f3fa788358bd04ba32f4b4df20f728bf40_prof);

        
        $__internal_43ad4b5d8c16f8d4fe2ed485421fdb9006c9fdc26f125220e921f5f4afbc0f3e->leave($__internal_43ad4b5d8c16f8d4fe2ed485421fdb9006c9fdc26f125220e921f5f4afbc0f3e_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb69141fcfcf64de365fdbdfbc268d159d94f4b5b587a0699f26b893b0dbfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb69141fcfcf64de365fdbdfbc268d159d94f4b5b587a0699f26b893b0dbfed->enter($__internal_bbb69141fcfcf64de365fdbdfbc268d159d94f4b5b587a0699f26b893b0dbfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2caa562af9d7f661cad3487e4c9a66d0dca3a5c73377dba71b2afd4e62469448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caa562af9d7f661cad3487e4c9a66d0dca3a5c73377dba71b2afd4e62469448->enter($__internal_2caa562af9d7f661cad3487e4c9a66d0dca3a5c73377dba71b2afd4e62469448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2caa562af9d7f661cad3487e4c9a66d0dca3a5c73377dba71b2afd4e62469448->leave($__internal_2caa562af9d7f661cad3487e4c9a66d0dca3a5c73377dba71b2afd4e62469448_prof);

        
        $__internal_bbb69141fcfcf64de365fdbdfbc268d159d94f4b5b587a0699f26b893b0dbfed->leave($__internal_bbb69141fcfcf64de365fdbdfbc268d159d94f4b5b587a0699f26b893b0dbfed_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d11f306d020259d8c659148df58fdcb3f37a189dbd21d9e2209a3605f08d2ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d11f306d020259d8c659148df58fdcb3f37a189dbd21d9e2209a3605f08d2ab->enter($__internal_3d11f306d020259d8c659148df58fdcb3f37a189dbd21d9e2209a3605f08d2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cf12796f44e9b12f7c63882cfa7133cdc4fb203fcd196aa94ae38ef3d1646b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf12796f44e9b12f7c63882cfa7133cdc4fb203fcd196aa94ae38ef3d1646b72->enter($__internal_cf12796f44e9b12f7c63882cfa7133cdc4fb203fcd196aa94ae38ef3d1646b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_cf12796f44e9b12f7c63882cfa7133cdc4fb203fcd196aa94ae38ef3d1646b72->leave($__internal_cf12796f44e9b12f7c63882cfa7133cdc4fb203fcd196aa94ae38ef3d1646b72_prof);

        
        $__internal_3d11f306d020259d8c659148df58fdcb3f37a189dbd21d9e2209a3605f08d2ab->leave($__internal_3d11f306d020259d8c659148df58fdcb3f37a189dbd21d9e2209a3605f08d2ab_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 39,  166 => 38,  157 => 37,  140 => 30,  128 => 10,  124 => 9,  119 => 8,  110 => 7,  92 => 5,  79 => 41,  77 => 37,  69 => 31,  67 => 30,  55 => 21,  42 => 12,  40 => 7,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}AquaNote!{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"{{ asset('images/aquanote-logo.png') }}\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            {% block body %}{% endblock %}
        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made withh <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        {% block javascripts %}
            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}
    </body>
</html>

", "base.html.twig", "/var/www/html/aqua_note/app/Resources/views/base.html.twig");
    }
}

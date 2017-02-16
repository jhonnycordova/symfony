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
        $__internal_24d2edd5e1b39847bae4e54618f9ead6b5b5e45e0f6bcbb722dbc8e96ad44a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d2edd5e1b39847bae4e54618f9ead6b5b5e45e0f6bcbb722dbc8e96ad44a10->enter($__internal_24d2edd5e1b39847bae4e54618f9ead6b5b5e45e0f6bcbb722dbc8e96ad44a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_20b389ac2912f1c695e6ea765c94a0a06251b81a3da35f33b71ba4df80697330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b389ac2912f1c695e6ea765c94a0a06251b81a3da35f33b71ba4df80697330->enter($__internal_20b389ac2912f1c695e6ea765c94a0a06251b81a3da35f33b71ba4df80697330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_24d2edd5e1b39847bae4e54618f9ead6b5b5e45e0f6bcbb722dbc8e96ad44a10->leave($__internal_24d2edd5e1b39847bae4e54618f9ead6b5b5e45e0f6bcbb722dbc8e96ad44a10_prof);

        
        $__internal_20b389ac2912f1c695e6ea765c94a0a06251b81a3da35f33b71ba4df80697330->leave($__internal_20b389ac2912f1c695e6ea765c94a0a06251b81a3da35f33b71ba4df80697330_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b91cdca268dbdf7b1ebe8631d5ea8435e0fe71965bc39db64599f0f3c67131a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b91cdca268dbdf7b1ebe8631d5ea8435e0fe71965bc39db64599f0f3c67131a->enter($__internal_4b91cdca268dbdf7b1ebe8631d5ea8435e0fe71965bc39db64599f0f3c67131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b21cdda247937a59b55acdc136736b46448c9f68db371c3058d97e7d0c5ad0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21cdda247937a59b55acdc136736b46448c9f68db371c3058d97e7d0c5ad0ab->enter($__internal_b21cdda247937a59b55acdc136736b46448c9f68db371c3058d97e7d0c5ad0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_b21cdda247937a59b55acdc136736b46448c9f68db371c3058d97e7d0c5ad0ab->leave($__internal_b21cdda247937a59b55acdc136736b46448c9f68db371c3058d97e7d0c5ad0ab_prof);

        
        $__internal_4b91cdca268dbdf7b1ebe8631d5ea8435e0fe71965bc39db64599f0f3c67131a->leave($__internal_4b91cdca268dbdf7b1ebe8631d5ea8435e0fe71965bc39db64599f0f3c67131a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6934a96f0835bdceec9212012a84282459d055079ee5407417928a429f5d325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6934a96f0835bdceec9212012a84282459d055079ee5407417928a429f5d325->enter($__internal_e6934a96f0835bdceec9212012a84282459d055079ee5407417928a429f5d325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_35f36085e7613b6356ec19af7293ffe378d5175613377481bbf8401f5ed2046e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f36085e7613b6356ec19af7293ffe378d5175613377481bbf8401f5ed2046e->enter($__internal_35f36085e7613b6356ec19af7293ffe378d5175613377481bbf8401f5ed2046e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_35f36085e7613b6356ec19af7293ffe378d5175613377481bbf8401f5ed2046e->leave($__internal_35f36085e7613b6356ec19af7293ffe378d5175613377481bbf8401f5ed2046e_prof);

        
        $__internal_e6934a96f0835bdceec9212012a84282459d055079ee5407417928a429f5d325->leave($__internal_e6934a96f0835bdceec9212012a84282459d055079ee5407417928a429f5d325_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_884ff9ac7e77f0ef337f6dac537f6cc20fb7ba1432a626855fb5e08d2a50a386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884ff9ac7e77f0ef337f6dac537f6cc20fb7ba1432a626855fb5e08d2a50a386->enter($__internal_884ff9ac7e77f0ef337f6dac537f6cc20fb7ba1432a626855fb5e08d2a50a386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8e96809f3503ae649f080e48dd7b1f0957cf0ef77bd8a7422e4716efec3601b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e96809f3503ae649f080e48dd7b1f0957cf0ef77bd8a7422e4716efec3601b->enter($__internal_b8e96809f3503ae649f080e48dd7b1f0957cf0ef77bd8a7422e4716efec3601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8e96809f3503ae649f080e48dd7b1f0957cf0ef77bd8a7422e4716efec3601b->leave($__internal_b8e96809f3503ae649f080e48dd7b1f0957cf0ef77bd8a7422e4716efec3601b_prof);

        
        $__internal_884ff9ac7e77f0ef337f6dac537f6cc20fb7ba1432a626855fb5e08d2a50a386->leave($__internal_884ff9ac7e77f0ef337f6dac537f6cc20fb7ba1432a626855fb5e08d2a50a386_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be4aaf5b341a6181fd8b0df1c9b5ecc4492ac715eeed61db8dcb228213a0e2e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4aaf5b341a6181fd8b0df1c9b5ecc4492ac715eeed61db8dcb228213a0e2e2->enter($__internal_be4aaf5b341a6181fd8b0df1c9b5ecc4492ac715eeed61db8dcb228213a0e2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcc0a09d1e65156aca6ab65333c38820d90f166cda98383363917ef91c097803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc0a09d1e65156aca6ab65333c38820d90f166cda98383363917ef91c097803->enter($__internal_dcc0a09d1e65156aca6ab65333c38820d90f166cda98383363917ef91c097803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_dcc0a09d1e65156aca6ab65333c38820d90f166cda98383363917ef91c097803->leave($__internal_dcc0a09d1e65156aca6ab65333c38820d90f166cda98383363917ef91c097803_prof);

        
        $__internal_be4aaf5b341a6181fd8b0df1c9b5ecc4492ac715eeed61db8dcb228213a0e2e2->leave($__internal_be4aaf5b341a6181fd8b0df1c9b5ecc4492ac715eeed61db8dcb228213a0e2e2_prof);

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
        return array (  168 => 39,  165 => 38,  156 => 37,  139 => 30,  127 => 10,  123 => 9,  118 => 8,  109 => 7,  91 => 5,  79 => 41,  77 => 37,  69 => 31,  67 => 30,  55 => 21,  42 => 12,  40 => 7,  35 => 5,  29 => 1,);
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

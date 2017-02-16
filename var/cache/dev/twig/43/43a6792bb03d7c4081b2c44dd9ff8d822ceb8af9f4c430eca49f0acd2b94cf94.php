<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_77e90a8ccfe916caa912c35043091e4907091ba863941e0f097507fe090f26d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc6a384f39245bf53ee61a9a09c776a648fdd3c252469476ccbca7483f02595f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6a384f39245bf53ee61a9a09c776a648fdd3c252469476ccbca7483f02595f->enter($__internal_dc6a384f39245bf53ee61a9a09c776a648fdd3c252469476ccbca7483f02595f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_97b429a959b13f18611121b6e15ae0f1a6c7086ec996c05f30330bae5bde42f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b429a959b13f18611121b6e15ae0f1a6c7086ec996c05f30330bae5bde42f4->enter($__internal_97b429a959b13f18611121b6e15ae0f1a6c7086ec996c05f30330bae5bde42f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc6a384f39245bf53ee61a9a09c776a648fdd3c252469476ccbca7483f02595f->leave($__internal_dc6a384f39245bf53ee61a9a09c776a648fdd3c252469476ccbca7483f02595f_prof);

        
        $__internal_97b429a959b13f18611121b6e15ae0f1a6c7086ec996c05f30330bae5bde42f4->leave($__internal_97b429a959b13f18611121b6e15ae0f1a6c7086ec996c05f30330bae5bde42f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ecf97c6c519615588e5c9bff740da07c9d83d8602f44dec89d9c108a90f1646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecf97c6c519615588e5c9bff740da07c9d83d8602f44dec89d9c108a90f1646->enter($__internal_5ecf97c6c519615588e5c9bff740da07c9d83d8602f44dec89d9c108a90f1646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b9f04ab113b86d46446f53f6161b1e0ffc52d9c64b1e0f9ea5935eb6f7dc9c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f04ab113b86d46446f53f6161b1e0ffc52d9c64b1e0f9ea5935eb6f7dc9c78->enter($__internal_b9f04ab113b86d46446f53f6161b1e0ffc52d9c64b1e0f9ea5935eb6f7dc9c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b9f04ab113b86d46446f53f6161b1e0ffc52d9c64b1e0f9ea5935eb6f7dc9c78->leave($__internal_b9f04ab113b86d46446f53f6161b1e0ffc52d9c64b1e0f9ea5935eb6f7dc9c78_prof);

        
        $__internal_5ecf97c6c519615588e5c9bff740da07c9d83d8602f44dec89d9c108a90f1646->leave($__internal_5ecf97c6c519615588e5c9bff740da07c9d83d8602f44dec89d9c108a90f1646_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/aqua_note/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

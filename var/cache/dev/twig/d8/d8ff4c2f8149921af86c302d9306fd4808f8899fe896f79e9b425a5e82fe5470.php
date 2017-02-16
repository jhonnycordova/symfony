<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03e9b7c1e3d4ddf2732579d167a98e84cfe8f14b1cb75445a19834c94f2069d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0c8d0166b4f032ae73563994c09ec7b9e8fca808cee716a6695ae280addf730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c8d0166b4f032ae73563994c09ec7b9e8fca808cee716a6695ae280addf730->enter($__internal_e0c8d0166b4f032ae73563994c09ec7b9e8fca808cee716a6695ae280addf730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7aea889520802492c4e071753fde79682ebbd79681afe7ca06fe0944bfcd3ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aea889520802492c4e071753fde79682ebbd79681afe7ca06fe0944bfcd3ffc->enter($__internal_7aea889520802492c4e071753fde79682ebbd79681afe7ca06fe0944bfcd3ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c8d0166b4f032ae73563994c09ec7b9e8fca808cee716a6695ae280addf730->leave($__internal_e0c8d0166b4f032ae73563994c09ec7b9e8fca808cee716a6695ae280addf730_prof);

        
        $__internal_7aea889520802492c4e071753fde79682ebbd79681afe7ca06fe0944bfcd3ffc->leave($__internal_7aea889520802492c4e071753fde79682ebbd79681afe7ca06fe0944bfcd3ffc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd5020ddb3796609b2567104cebac180cf522c9bdcf3d696f208ba89b6aba0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5020ddb3796609b2567104cebac180cf522c9bdcf3d696f208ba89b6aba0d1->enter($__internal_dd5020ddb3796609b2567104cebac180cf522c9bdcf3d696f208ba89b6aba0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7bb657cfe1977438bc688ae784baf3506506a741b5c5b2e10816e6edcaf5c744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb657cfe1977438bc688ae784baf3506506a741b5c5b2e10816e6edcaf5c744->enter($__internal_7bb657cfe1977438bc688ae784baf3506506a741b5c5b2e10816e6edcaf5c744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bb657cfe1977438bc688ae784baf3506506a741b5c5b2e10816e6edcaf5c744->leave($__internal_7bb657cfe1977438bc688ae784baf3506506a741b5c5b2e10816e6edcaf5c744_prof);

        
        $__internal_dd5020ddb3796609b2567104cebac180cf522c9bdcf3d696f208ba89b6aba0d1->leave($__internal_dd5020ddb3796609b2567104cebac180cf522c9bdcf3d696f208ba89b6aba0d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc4defb0ba60b08807895ca92ed55aa915df066dd2f43a3ea4d17e02f4a9a200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc4defb0ba60b08807895ca92ed55aa915df066dd2f43a3ea4d17e02f4a9a200->enter($__internal_bc4defb0ba60b08807895ca92ed55aa915df066dd2f43a3ea4d17e02f4a9a200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f972382840f4e8252628788577ffedf02f089540fe155ebeea68564b0501cd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f972382840f4e8252628788577ffedf02f089540fe155ebeea68564b0501cd8d->enter($__internal_f972382840f4e8252628788577ffedf02f089540fe155ebeea68564b0501cd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f972382840f4e8252628788577ffedf02f089540fe155ebeea68564b0501cd8d->leave($__internal_f972382840f4e8252628788577ffedf02f089540fe155ebeea68564b0501cd8d_prof);

        
        $__internal_bc4defb0ba60b08807895ca92ed55aa915df066dd2f43a3ea4d17e02f4a9a200->leave($__internal_bc4defb0ba60b08807895ca92ed55aa915df066dd2f43a3ea4d17e02f4a9a200_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c6839e8d4c9edc8577a89de603f02891a70320f8857352d5fd93e4406564b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6839e8d4c9edc8577a89de603f02891a70320f8857352d5fd93e4406564b9f->enter($__internal_7c6839e8d4c9edc8577a89de603f02891a70320f8857352d5fd93e4406564b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8c36f38059085dd75214ee0e77ce66e81a26733ade5fdc04c641791b1f3697d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c36f38059085dd75214ee0e77ce66e81a26733ade5fdc04c641791b1f3697d->enter($__internal_b8c36f38059085dd75214ee0e77ce66e81a26733ade5fdc04c641791b1f3697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b8c36f38059085dd75214ee0e77ce66e81a26733ade5fdc04c641791b1f3697d->leave($__internal_b8c36f38059085dd75214ee0e77ce66e81a26733ade5fdc04c641791b1f3697d_prof);

        
        $__internal_7c6839e8d4c9edc8577a89de603f02891a70320f8857352d5fd93e4406564b9f->leave($__internal_7c6839e8d4c9edc8577a89de603f02891a70320f8857352d5fd93e4406564b9f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/aqua_note/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

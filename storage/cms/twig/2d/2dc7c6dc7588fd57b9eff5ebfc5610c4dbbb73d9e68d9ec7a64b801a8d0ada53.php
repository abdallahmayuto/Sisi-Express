<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/mayutojr/public_html/tracking.sisi-express.com/themes/spotlayer/partials/chartswidget.htm */
class __TwigTemplate_080d20d2934b3c659ebea1cceadd80e6089d731b801185a6f228d811d28430c7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script>
function quickStats(){
    _initSparklineChart(\$('#kt_chart_quick_stats_1'), [";
        // line 3
        echo twig_escape_filter($this->env, ($context["PendingPaymentsChart"] ?? null), "html", null, true);
        echo "], KTApp.getStateColor('warning'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_2'), [";
        // line 4
        echo twig_escape_filter($this->env, ($context["CurrentMonthSalesChart"] ?? null), "html", null, true);
        echo "], KTApp.getStateColor('success'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_3'), [";
        // line 5
        echo twig_escape_filter($this->env, ($context["shippingChart"] ?? null), "html", null, true);
        echo "], KTApp.getStateColor('danger'), 3);
}
</script>";
    }

    public function getTemplateName()
    {
        return "/home/mayutojr/public_html/tracking.sisi-express.com/themes/spotlayer/partials/chartswidget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
function quickStats(){
    _initSparklineChart(\$('#kt_chart_quick_stats_1'), [{{PendingPaymentsChart}}], KTApp.getStateColor('warning'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_2'), [{{CurrentMonthSalesChart}}], KTApp.getStateColor('success'), 3);
    _initSparklineChart(\$('#kt_chart_quick_stats_3'), [{{shippingChart}}], KTApp.getStateColor('danger'), 3);
}
</script>", "/home/mayutojr/public_html/tracking.sisi-express.com/themes/spotlayer/partials/chartswidget.htm", "");
    }
}

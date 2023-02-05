<?php 


add_action("breakdance_register_template_types_and_conditions", function () {
    if (function_exists("pll_languages_list")) {
        $lang_list = pll_languages_list();
        \Breakdance\ConditionsAPI\register([
            "supports" => ["element_display", "templating"],
            "slug" => "polylang4bd-condition", // MUST BE UNIQUE
            "label" => "Language",
            "category" => "Polylang",
            "operands" => ["equals", "not equals"],

            "values" => function () use ($lang_list) {
                return [
                    [
                        "label" => "Language",
                        "items" => array_map(function ($lang_list) {
                            return [
                                "text" => $lang_list,
                                "value" => $lang_list,
                            ];
                        }, $lang_list),
                    ],
                ];
            },

            "allowMultiselect" => false,

            "callback" => function (string $operand, $value) {
                $myVal = pll_current_language();

                if ($operand === "equals") {
                    return $myVal === $value;
                }

                if ($operand === "not equals") {
                    return $myVal !== $value;
                }

                return false;
            },
        ]);
    }
});

?>


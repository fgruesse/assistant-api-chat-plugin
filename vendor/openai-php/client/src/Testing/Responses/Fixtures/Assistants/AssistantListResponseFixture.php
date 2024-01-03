<?php

namespace OpenAI\Testing\Responses\Fixtures\Assistants;

final class AssistantListResponseFixture
{
    public const ATTRIBUTES = [
        'object' => 'list',
        'data' => [
            [
                'id' => 'asst_SMzoVX8XmCZEg1EbMHoAm8tc',
                'object' => 'assistant',
                'created_at' => 1_699_619_403,
                'name' => 'Math Tutor',
                'description' => null,
                'model' => 'gpt-4',
                'instructions' => 'You are a personal math tutor.',
                'tools' => [],
                'file_ids' => [],
                'metadata' => [],
            ],
        ],
        'first_id' => 'asst_SMzoVX8XmCZEg1EbMHoAm8tc',
        'last_id' => 'asst_SMzoVX8XmCZEg1EbMHoAm8tc',
        'has_more' => false,
    ];
}

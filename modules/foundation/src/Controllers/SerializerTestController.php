<?php

declare(strict_types=1);

namespace Pixielity\Foundation\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Pixielity\Support\Facades\Json;
use Pixielity\Support\Facades\Serializer;
use Pixielity\Routing\Attributes\AsController;
use Pixielity\Routing\Attributes\Get;
use Pixielity\Routing\Attributes\Group;
use Pixielity\Routing\Attributes\Prefix;

/**
 * Serializer Test Controller.
 *
 * Tests all functionality of the Serializer and Json facades including:
 * - PHP serialization/unserialization
 * - JSON encoding/decoding
 * - Validation methods
 * - Error handling
 *
 * @author  Pixielity Development Team
 *
 * @since   1.0.0
 */
#[AsController]
#[Group('api')]
#[Prefix('test/serializer')]
class SerializerTestController extends Controller
{
    /**
     * Test all serializer functionality.
     *
     * @return JsonResponse
     */
    #[Get('/', name: 'foundation.api.test.serializer.index')]
    public function index(): JsonResponse
    {
        return response()->json([
            'message' => 'Serializer Test Endpoints',
            'endpoints' => [
                'php_serializer' => '/api/test/serializer/php',
                'json_serializer' => '/api/test/serializer/json',
                'all_tests' => '/api/test/serializer/all',
            ],
        ]);
    }

    /**
     * Test PHP Serializer functionality.
     *
     * Tests serialize(), unserialize(), and isSerialized() methods.
     *
     * @return JsonResponse
     */
    #[Get('/php', name: 'foundation.api.test.serializer.php')]
    public function testPhpSerializer(): JsonResponse
    {
        $results = [];

        // Test 1: Serialize and unserialize a string
        $testString = 'Hello, World!';
        $serialized = Serializer::serialize($testString);
        $unserialized = Serializer::unserialize($serialized);
        $results['string_test'] = [
            'original' => $testString,
            'serialized' => $serialized,
            'unserialized' => $unserialized,
            'is_serialized' => Serializer::isSerialized($serialized),
            'match' => $testString === $unserialized,
        ];

        // Test 2: Serialize and unserialize an array
        $testArray = ['name' => 'John Doe', 'age' => 30, 'active' => true];
        $serialized = Serializer::serialize($testArray);
        $unserialized = Serializer::unserialize($serialized);
        $results['array_test'] = [
            'original' => $testArray,
            'serialized' => $serialized,
            'unserialized' => $unserialized,
            'is_serialized' => Serializer::isSerialized($serialized),
            'match' => $testArray === $unserialized,
        ];

        // Test 3: Serialize and unserialize integers
        $testInt = 42;
        $serialized = Serializer::serialize($testInt);
        $unserialized = Serializer::unserialize($serialized);
        $results['integer_test'] = [
            'original' => $testInt,
            'serialized' => $serialized,
            'unserialized' => $unserialized,
            'is_serialized' => Serializer::isSerialized($serialized),
            'match' => $testInt === $unserialized,
        ];

        // Test 4: Serialize and unserialize boolean
        $testBool = false;
        $serialized = Serializer::serialize($testBool);
        $unserialized = Serializer::unserialize($serialized);
        $results['boolean_test'] = [
            'original' => $testBool,
            'serialized' => $serialized,
            'unserialized' => $unserialized,
            'is_serialized' => Serializer::isSerialized($serialized),
            'match' => $testBool === $unserialized,
        ];

        // Test 5: Serialize and unserialize null
        $testNull = null;
        $serialized = Serializer::serialize($testNull);
        $unserialized = Serializer::unserialize($serialized);
        $results['null_test'] = [
            'original' => $testNull,
            'serialized' => $serialized,
            'unserialized' => $unserialized,
            'is_serialized' => Serializer::isSerialized($serialized),
            'match' => $testNull === $unserialized,
        ];

        // Test 6: Serialize nested arrays
        $testNested = [
            'user' => [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'roles' => ['admin', 'editor'],
            ],
            'settings' => [
                'theme' => 'dark',
                'notifications' => true,
            ],
        ];
        $serialized = Serializer::serialize($testNested);
        $unserialized = Serializer::unserialize($serialized);
        $results['nested_array_test'] = [
            'original' => $testNested,
            'serialized' => $serialized,
            'unserialized' => $unserialized,
            'is_serialized' => Serializer::isSerialized($serialized),
            'match' => $testNested === $unserialized,
        ];

        // Test 7: Check isSerialized with non-serialized strings
        $results['is_serialized_checks'] = [
            'empty_string' => Serializer::isSerialized(''),
            'plain_text' => Serializer::isSerialized('Hello World'),
            'json_string' => Serializer::isSerialized('{"key":"value"}'),
            'serialized_false' => Serializer::isSerialized('b:0;'),
            'serialized_null' => Serializer::isSerialized('N;'),
        ];

        return response()->json([
            'test' => 'PHP Serializer',
            'results' => $results,
            'summary' => [
                'total_tests' => count($results),
                'all_passed' => $this->checkAllPassed($results),
            ],
        ]);
    }

    /**
     * Test JSON Serializer functionality.
     *
     * Tests encode(), decode(), and isValid() methods.
     *
     * @return JsonResponse
     */
    #[Get('/json', name: 'foundation.api.test.serializer.json')]
    public function testJsonSerializer(): JsonResponse
    {
        $results = [];

        // Test 1: Encode and decode a string
        $testString = 'Hello, JSON!';
        $encoded = Json::encode($testString);
        $decoded = Json::decode($encoded);
        $results['string_test'] = [
            'original' => $testString,
            'encoded' => $encoded,
            'decoded' => $decoded,
            'is_valid' => Json::isValid($encoded),
            'match' => $testString === $decoded,
        ];

        // Test 2: Encode and decode an array
        $testArray = ['name' => 'John Doe', 'age' => 30, 'active' => true];
        $encoded = Json::encode($testArray);
        $decoded = Json::decode($encoded, true);
        $results['array_test'] = [
            'original' => $testArray,
            'encoded' => $encoded,
            'decoded' => $decoded,
            'is_valid' => Json::isValid($encoded),
            'match' => $testArray === $decoded,
        ];

        // Test 3: Encode and decode integers
        $testInt = 42;
        $encoded = Json::encode($testInt);
        $decoded = Json::decode($encoded);
        $results['integer_test'] = [
            'original' => $testInt,
            'encoded' => $encoded,
            'decoded' => $decoded,
            'is_valid' => Json::isValid($encoded),
            'match' => $testInt === $decoded,
        ];

        // Test 4: Encode and decode boolean
        $testBool = false;
        $encoded = Json::encode($testBool);
        $decoded = Json::decode($encoded);
        $results['boolean_test'] = [
            'original' => $testBool,
            'encoded' => $encoded,
            'decoded' => $decoded,
            'is_valid' => Json::isValid($encoded),
            'match' => $testBool === $decoded,
        ];

        // Test 5: Encode and decode null
        $testNull = null;
        $encoded = Json::encode($testNull);
        $decoded = Json::decode($encoded);
        $results['null_test'] = [
            'original' => $testNull,
            'encoded' => $encoded,
            'decoded' => $decoded,
            'is_valid' => Json::isValid($encoded),
            'match' => $testNull === $decoded,
        ];

        // Test 6: Encode nested arrays with pretty print
        $testNested = [
            'user' => [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'roles' => ['admin', 'editor'],
            ],
            'settings' => [
                'theme' => 'dark',
                'notifications' => true,
            ],
        ];
        $encoded = Json::encode($testNested, JSON_PRETTY_PRINT);
        $decoded = Json::decode($encoded, true);
        $results['nested_array_test'] = [
            'original' => $testNested,
            'encoded' => $encoded,
            'decoded' => $decoded,
            'is_valid' => Json::isValid($encoded),
            'match' => $testNested === $decoded,
        ];

        // Test 7: Decode to object vs array
        $jsonString = '{"name":"Test","value":123}';
        $decodedObject = Json::decode($jsonString, false);
        $decodedArray = Json::decode($jsonString, true);
        $results['decode_format_test'] = [
            'json_string' => $jsonString,
            'decoded_as_object' => $decodedObject,
            'decoded_as_array' => $decodedArray,
            'object_type' => gettype($decodedObject),
            'array_type' => gettype($decodedArray),
        ];

        // Test 8: Check isValid with various strings
        $results['is_valid_checks'] = [
            'empty_string' => Json::isValid(''),
            'plain_text' => Json::isValid('Hello World'),
            'valid_json_object' => Json::isValid('{"key":"value"}'),
            'valid_json_array' => Json::isValid('[1,2,3]'),
            'valid_json_string' => Json::isValid('"test"'),
            'valid_json_number' => Json::isValid('42'),
            'valid_json_bool' => Json::isValid('true'),
            'valid_json_null' => Json::isValid('null'),
            'invalid_json' => Json::isValid('{key:value}'),
        ];

        return response()->json([
            'test' => 'JSON Serializer',
            'results' => $results,
            'summary' => [
                'total_tests' => count($results),
                'all_passed' => $this->checkAllPassed($results),
            ],
        ]);
    }

    /**
     * Run all serializer tests.
     *
     * @return JsonResponse
     */
    #[Get('/all', name: 'foundation.api.test.serializer.all')]
    public function testAll(): JsonResponse
    {
        $phpTests = $this->testPhpSerializer()->getData(true);
        $jsonTests = $this->testJsonSerializer()->getData(true);

        return response()->json([
            'message' => 'All Serializer Tests',
            'php_serializer' => $phpTests,
            'json_serializer' => $jsonTests,
            'overall_summary' => [
                'php_passed' => $phpTests['summary']['all_passed'] ?? false,
                'json_passed' => $jsonTests['summary']['all_passed'] ?? false,
                'all_tests_passed' => ($phpTests['summary']['all_passed'] ?? false) && ($jsonTests['summary']['all_passed'] ?? false),
            ],
        ]);
    }

    /**
     * Check if all tests passed.
     *
     * @param  array<string, mixed>  $results
     * @return bool
     */
    private function checkAllPassed(array $results): bool
    {
        foreach ($results as $key => $result) {
            if ($key === 'is_serialized_checks' || $key === 'is_valid_checks' || $key === 'decode_format_test') {
                continue;
            }

            if (isset($result['match']) && $result['match'] === false) {
                return false;
            }
        }

        return true;
    }
}

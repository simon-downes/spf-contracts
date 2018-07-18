# SPF Contracts

## Introduction

This package defines the interfaces and traits for the core services used
throughout SPF. e.g. `spf\contracts\database\DatabaseConnection`
defines the contract for accessing a database, while the
`spf\contracts\support\collections\Dictionary` defines methods for operating on
a collection of key/value pairs.

Each directory corresponds to a SPF package that provides implementations of
the interfaces defined in that directory. For example, the `simon-downes/spf`
package contains implementions of `spf\contracts\log\Logger`.

## Naming Conventions

Interfaces in this package are named in one of two ways:

* As a singular noun (e.g. `Dictionary`, `DatabaseConnection`, `Filter`)
* As a noun or verb suffixed with "-able" (e.g. `Arrayable`, `Runnable`)

The implementations of those interfaces within SPF packages are prefixed with `Base`.

* `Dictionary` ➡ `BaseDictionary`
* `DatabaseConnection` ➡ `BaseConnection`
* `ConnectionManager` ➡ `BaseConnectionManager`
* `Profiler` ➡ `BaseProfiler`

## Background

This package is based on [gamernetwork/yolk-contracts](https://www.github.com/gamernetwork/yolk-contracts).
For more information on the history and relationship between Yolk and SPF please
see the README of [simon-downes/spf-core](https://www.github.com/simon-downes/spf-core).

## Why Contracts?

A separate contracts package provides two primary benefits:

* A quick reference point for all available contracts.
* A single, decoupled package that promotes loose-coupling by separating
interfaces from implementations.

### Quick Reference

Having all of the framework's services neatly defined within interfaces provides
succinct documentation to available features.

Rather than tracking down which methods are available within a large, complicated
class, you can refer to a simpler, cleaner interface.

### Loose Coupling

[Wikipedia Reference](https://en.wikipedia.org/wiki/Loose_coupling)

SPF packages provide default and usually basic implementations of each contract;
sometimes these might not be sufficient or quite right for a particular project.

By specifying contracts, code is no longer coupled to these specific implementations
and you may easily write alternatives that better suit your project.

Likewise, you can switch between implementations without modifying any consuming
code. The classic example being able to switch caching backends (e.g. Memory/Redis/Memcache)
without modifying any code that uses the cache.
